<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\URL;
use Support\Telegram\TelegramBotApi;

class UpdateTelegramWebhook extends Command
{
    protected $signature = 'telegram:webhook {action : set|delete} {--url=}';

    protected $description = 'Manage Telegram bot webhook';

    public function handle(TelegramBotApi $bot): int
    {
        $action = $this->argument('action');
        $secret = config('telegram.webhook_secret');

        if ($action === 'set') {
            $url = $this->option('url') ?? URL::to('/telegram/webhook');
            $response = $bot->setWebhook($url, $secret);
            $this->info('Webhook set response: '.json_encode($response));
        } elseif ($action === 'delete') {
            $response = $bot->deleteWebhook();
            $this->info('Webhook delete response: '.json_encode($response));
        } else {
            $this->error('Unknown action. Use set or delete.');
            return 1;
        }

        return 0;
    }
}
