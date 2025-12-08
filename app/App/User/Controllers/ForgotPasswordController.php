<?php

namespace App\User\Controllers;

use App\User\Requests\PasswordSendResetCodeRequest;
use Domain\User\Models\ResetPasswordUser;
use Domain\User\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Support\Controller;
use Support\IqSMS\ErrorCode as IqSmsErrorCode;
use Support\IqSMS\IqSMS;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return View
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.phone');
    }

    /**
     * Send a reset code to the given user.
     *
     * @param PasswordSendResetCodeRequest $request
     * @param IqSMS $iqSMS
     * @param ResetPasswordUser $resetUser
     * @return RedirectResponse|JsonResponse
     */
    public function sendResetCode(PasswordSendResetCodeRequest $request, IqSMS $iqSMS, ResetPasswordUser $resetUser)
    {
        $code = $resetUser->getCode();

        if(env('APP_ENV') === 'production') {
            try {
                $iqSMS->send($request->phone, "Восстановление доступа от учетной записи Профтрекер! Код восстановления: {$code}");
            } catch (\Exception $exception) {
                if($exception instanceof \InvalidArgumentException && $exception->getCode() === IqSmsErrorCode::INVALID_PHONE) {
                    return redirect(route('password.reset'))
                        ->withErrors(['phone' => 'Пожалуйста, укажите корректный «телефон».'])
                        ->withInput();
                }

                return redirect(route('password.reset'))
                    ->withErrors(['sms_error' => 'Регистрация в данный момент невозможна, попробуйте позже.'])
                    ->withInput();
            }
        }

        $user = User::where('phone', $request->phone)->first();
        $user->update(['reset_password_code' => $code]);
        $resetUser->setUserId($user->id);

        if(env('APP_ENV') !== 'production') {
            return redirect(route('password.reset'))
                ->with('sms_code', $code);
        }

        return redirect(route('password.reset'));
    }
}
