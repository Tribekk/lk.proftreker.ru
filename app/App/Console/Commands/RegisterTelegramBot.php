<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class RegisterTelegramBot extends Command
{
    protected $signature = 'telegram:bot:register {--token=}';

    protected $description = 'Fetch Telegram bot info using the login token and cache it for the login widget.';

    public function handle(): int
    {
        $token = $this->option('token') ?? config('telegram.login_bot_token');

        if (! $token) {
            $this->error('Set TELEGRAM_LOGIN_BOT_TOKEN in the .env file or pass --token option.');

            return 1;
        }

        $response = Http::get("https://api.telegram.org/bot{$token}/getMe");

        if (! $response->ok() || ! $response->json('ok')) {
            $this->error('Не удалось получить данные бота. Проверьте токен.');

            return 1;
        }

        $botData = $response->json('result');

        $this->cacheBotInfo($botData);

        $this->info(sprintf(
            'Бот %s (%s) зарегистрирован. Логин: @%s',
            $botData['first_name'] ?? '',
            $botData['id'] ?? '',
            $botData['username'] ?? ''
        ));

        return 0;
    }

    protected function cacheBotInfo(array $botData): void
    {
        $path = base_path('bootstrap/cache/telegram-bot.php');

        $payload = var_export([
            'id' => $botData['id'] ?? null,
            'username' => $botData['username'] ?? null,
            'first_name' => $botData['first_name'] ?? null,
        ], true);

        $content = <<<PHP
<?php

return {$payload};
PHP;

        File::put($path, $content);
    }
}
