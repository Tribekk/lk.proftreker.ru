<?php

namespace Support\Telegram;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Support\Telegram\Exceptions\TelegramAuthException;

class TelegramLogin
{
    protected string $token;

    protected int $ttl;

    public function __construct(?string $token = null, ?int $ttl = null)
    {
        $this->token = $token ?? (string) config('telegram.login_bot_token', '');
        $this->ttl = $ttl ?? (int) config('telegram.auth_ttl', 300);
    }

    /**
     * @throws TelegramAuthException
     */
    public function validate(array $payload): array
    {
        if (empty($this->token)) {
            throw TelegramAuthException::missingToken();
        }

        $hash = Arr::get($payload, 'hash');
        $authDate = (int) Arr::get($payload, 'auth_date', 0);

        if (! $hash || ! $authDate) {
            throw TelegramAuthException::invalidPayload();
        }

        if ($this->ttl > 0 && Carbon::now()->diffInSeconds(Carbon::createFromTimestamp($authDate)) > $this->ttl) {
            throw TelegramAuthException::invalidPayload();
        }

        $dataForHash = collect($payload)
            ->except('hash')
            ->map(function ($value, $key) {
                return $key.'='.$value;
            })
            ->sort()
            ->implode("\n");

        $secretKey = hash('sha256', $this->token, true);
        $calculatedHash = hash_hmac('sha256', $dataForHash, $secretKey);

        if (! hash_equals($calculatedHash, $hash)) {
            throw TelegramAuthException::invalidPayload();
        }

        return $payload;
    }

    public function botUsername(): ?string
    {
        $username = config('telegram.login_bot_username');

        return $username ? Str::of($username)->ltrim('@')->__toString() : null;
    }
}
