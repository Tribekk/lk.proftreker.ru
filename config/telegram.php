<?php

use Illuminate\Support\Arr;

$cachedBotInfo = [];
$cachedBotPath = base_path('bootstrap/cache/telegram-bot.php');

if (is_file($cachedBotPath)) {
    $data = include $cachedBotPath;
    if (is_array($data)) {
        $cachedBotInfo = $data;
    }
}

return [
    'login_bot_token' => env('TELEGRAM_LOGIN_BOT_TOKEN'),
    'login_bot_username' => env('TELEGRAM_LOGIN_BOT_USERNAME', Arr::get($cachedBotInfo, 'username')),
    'login_bot_id' => Arr::get($cachedBotInfo, 'id'),
    'auth_ttl' => (int) env('TELEGRAM_LOGIN_AUTH_TTL', 300),
    'webhook_secret' => env('TELEGRAM_WEBHOOK_SECRET'),
    'code_ttl' => (int) env('TELEGRAM_LOGIN_CODE_TTL', 10),
];
