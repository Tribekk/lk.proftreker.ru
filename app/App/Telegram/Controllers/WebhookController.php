<?php

namespace App\Telegram\Controllers;

use Domain\User\Models\TelegramLoginCode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Support\Telegram\TelegramBotApi;

class WebhookController extends Controller
{
    public function __invoke(Request $request, TelegramBotApi $bot): JsonResponse
    {
        if ($secret = config('telegram.webhook_secret')) {
            $header = $request->header('X-Telegram-Bot-Api-Secret-Token');
            if ($header !== $secret) {
                Log::warning('Telegram webhook: invalid secret token', ['provided' => $header]);
                return response()->json(['status' => 'ignored']);
            }
        }

        $update = $request->all();
        Log::info('Telegram webhook update', $update);

        if (! isset($update['message'])) {
            return response()->json(['status' => 'ok']);
        }

        $message = $update['message'];
        $chat = $message['from'] ?? $message['chat'] ?? [];
        $telegramId = $chat['id'] ?? null;

        if (! $telegramId) {
            Log::warning('Telegram webhook: no chat id');
            return response()->json(['status' => 'no_chat']);
        }

        $text = $message['text'] ?? '';
        if ($text === '/start' || $text === '/code' || Str::startsWith($text, '/start ')) {
            $code = $this->generateCode();

            $ttl = (int) config('telegram.code_ttl', 10);

            TelegramLoginCode::updateOrCreate(
                ['telegram_id' => $telegramId],
                [
                    'username' => $chat['username'] ?? null,
                    'first_name' => $chat['first_name'] ?? null,
                    'last_name' => $chat['last_name'] ?? null,
                    'code' => $code,
                    'expires_at' => now()->addMinutes($ttl),
                    'used_at' => null,
                ]
            );

            $bot->sendMessage($telegramId, "Ваш код для входа: {$code}\nВведите его на сайте lk.proftreker.ru в течение {$ttl} минут.");

            return response()->json(['status' => 'code_sent']);
        }

        $bot->sendMessage($telegramId, "Чтобы авторизоваться, отправьте команду /code и введите полученный код на сайте.");

        return response()->json(['status' => 'ignored']);
    }

    protected function generateCode(): string
    {
        return (string) random_int(100000, 999999);
    }
}
