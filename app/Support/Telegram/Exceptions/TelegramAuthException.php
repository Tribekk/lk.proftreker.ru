<?php

namespace Support\Telegram\Exceptions;

use Exception;

class TelegramAuthException extends Exception
{
    public static function missingToken(): self
    {
        return new self('TELEGRAM_LOGIN_BOT_TOKEN is not configured.');
    }

    public static function invalidPayload(): self
    {
        return new self('Не удалось подтвердить данные Telegram.');
    }
}
