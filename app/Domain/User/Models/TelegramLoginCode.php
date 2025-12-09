<?php

namespace Domain\User\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class TelegramLoginCode extends Model
{

    protected $fillable = [
        'telegram_id',
        'username',
        'first_name',
        'last_name',
        'code',
        'expires_at',
        'used_at',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'used_at' => 'datetime',
    ];

    public function scopeValid($query)
    {
        return $query->whereNull('used_at')->where('expires_at', '>=', Carbon::now());
    }
}
