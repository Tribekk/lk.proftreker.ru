<?php

namespace Support\Telegram;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramBotApi
{
    protected string $token;

    public function __construct(?string $token = null)
    {
        $this->token = $token ?? config('telegram.login_bot_token');
    }

    public function sendMessage(int $chatId, string $text): void
    {
        if (empty($this->token)) {
            Log::warning('TelegramBotApi: token is empty, message was not sent.');
            return;
        }

        Http::asForm()->post($this->buildUrl('sendMessage'), [
            'chat_id' => $chatId,
            'text' => $text,
        ]);
    }

    public function setWebhook(string $url, ?string $secretToken = null): array
    {
        return Http::asForm()->post($this->buildUrl('setWebhook'), array_filter([
            'url' => $url,
            'secret_token' => $secretToken,
        ]))->json() ?? [];
    }

    public function deleteWebhook(): array
    {
        return Http::asForm()->post($this->buildUrl('deleteWebhook'))->json() ?? [];
    }

    protected function buildUrl(string $method): string
    {
        return sprintf('https://api.telegram.org/bot%s/%s', $this->token, $method);
    }
}
