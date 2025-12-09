<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelegramLoginCodesTable extends Migration
{
    public function up()
    {
        Schema::create('telegram_login_codes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('telegram_id')->unique();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('code', 16);
            $table->timestamp('expires_at');
            $table->timestamp('used_at')->nullable();
            $table->timestamps();

            $table->index(['code', 'expires_at']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('telegram_login_codes');
    }
}
