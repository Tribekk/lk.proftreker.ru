<?php

namespace App\User\Controllers;

use App\Providers\RouteServiceProvider;
use App\User\Requests\TelegramLoginRequest;
use Domain\User\Actions\CreateUser;
use Domain\User\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
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
        try {
            $payload = $telegramLogin->validate($request->validated());
        } catch (TelegramAuthException $exception) {
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
        }

        Auth::login($user, true);

        return redirect()->intended($this->redirectTo);
    }
}
