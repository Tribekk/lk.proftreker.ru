<?php

namespace App\User\Controllers;

use App\Providers\RouteServiceProvider;
use App\User\Requests\TelegramLoginRequest;
use Domain\User\Actions\CreateUser;
use Domain\User\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Support\Controller;
use Support\Telegram\Exceptions\TelegramAuthException;
use Support\Telegram\TelegramLogin;

class TelegramAuthController extends Controller
{
    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function authenticate(TelegramLoginRequest $request, TelegramLogin $telegramLogin): RedirectResponse
    {
        Log::info('Telegram login request', ['payload' => $request->all()]);

        try {
            $payload = $telegramLogin->validate($request->validated());
        } catch (TelegramAuthException $exception) {
            Log::warning('Telegram login validation error', ['error' => $exception->getMessage()]);
            return back()->withErrors(['telegram' => $exception->getMessage()]);
        }

        $user = User::where('telegram_id', $payload['id'])->first();

        if (! $user) {
            $user = (new CreateUser())->run([
                'first_name' => $payload['first_name'] ?? 'Telegram',
                'last_name' => $payload['last_name'] ?? 'User',
                'middle_name' => null,
                'email' => null,
                'password' => Str::random(40),
                'telegram_id' => $payload['id'],
                'telegram_username' => $payload['username'] ?? null,
                'telegram_photo_url' => $payload['photo_url'] ?? null,
                'phone' => null,
            ]);
        } else {
            Log::info('Telegram login: user already exists', ['user_id' => $user->id, 'telegram_id' => $payload['id']]);
        }

        Log::info('Telegram login: logging in user', ['user_id' => $user->id]);

        Auth::login($user, true);

        Log::info('Telegram login: redirecting', ['redirect_to' => $this->redirectTo]);

        return redirect()->intended($this->redirectTo);
    }
}
