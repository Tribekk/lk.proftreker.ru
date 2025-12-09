<?php

namespace App\User\Controllers;

use App\Providers\RouteServiceProvider;
use App\User\Requests\TelegramCodeRequest;
use Domain\User\Actions\CreateUser;
use Domain\User\Models\TelegramLoginCode;
use Domain\User\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Support\Controller;

class TelegramAuthController extends Controller
{
    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function authenticate(TelegramCodeRequest $request): RedirectResponse
    {
        $code = $request->input('code');
        Log::info('Telegram login via code request', ['code' => $code]);

        $record = TelegramLoginCode::valid()->where('code', $code)->first();

        if (! $record) {
            Log::warning('Telegram login code not found or expired', ['code' => $code]);
            return back()->withErrors(['code' => __('Код не найден или его срок действия истёк.')]);
        }

        $record->update(['used_at' => now()]);

        $user = User::where('telegram_id', $record->telegram_id)->first();

        if (! $user) {
            $user = (new CreateUser())->run([
                'first_name' => $record->first_name ?? 'Telegram',
                'last_name' => $record->last_name ?? 'User',
                'middle_name' => null,
                'email' => null,
                'password' => Str::random(40),
                'telegram_id' => $record->telegram_id,
                'telegram_username' => $record->username,
                'phone' => null,
            ]);
            Log::info('Telegram login created new user', ['user_id' => $user->id]);
        } else {
            Log::info('Telegram login existing user', ['user_id' => $user->id]);
        }

        Auth::login($user, true);
        Log::info('Telegram login success', ['user_id' => $user->id]);

        return redirect()->intended($this->redirectTo);
    }
}
