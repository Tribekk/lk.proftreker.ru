<?php

namespace App\User\Controllers;

use App\User\Requests\RegisterGoToVerifyRequest;
use App\User\Requests\RegisterVerifyRequest;
use Domain\User\Models\RegisterUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Support\Controller;
use Support\IqSMS\IqSMS;
use Support\IqSMS\ErrorCode as IqSmsErrorCode;

class RegisterVerificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showVerifyForm()
    {
        return view('auth.register.verify');
    }

    /**
     * Переход с формы регистрации на форму подтверждение
     * Сохранение текущих полей и отправка смс с кодом подтверждения регистрации
     *
     * @param RegisterGoToVerifyRequest $request
     * @param IqSMS $iqSMS
     * @param RegisterUser $registerUser
     * @return RedirectResponse
     */
    public function goToVerify(RegisterGoToVerifyRequest $request, IqSMS $iqSMS, RegisterUser $registerUser)
    {
        $registerUser->storeUser($request->all());
        $code = $registerUser->getCode();

        if(env('APP_ENV') === 'production') {
            try {
                $iqSMS->send($request->phone, "Спасибо за регистрацию в Профтрекер! Код доступа: {$code} Планируем карьеру");
            } catch (\Exception $exception) {
                if($exception instanceof \InvalidArgumentException && $exception->getCode() === IqSmsErrorCode::INVALID_PHONE) {
                    return redirect(route('register'))
                        ->withErrors(['phone' => 'Пожалуйста, укажите корректный «телефон».'])
                        ->withInput();
                }

                return redirect(route('register'))
                    ->withErrors(['sms_register_error' => 'Регистрация в данный момент невозможна, попробуйте позже.'])
                    ->withInput();
            }
        } else {
            return redirect(route('register.verify'))
                ->with('sms_code', $code);
        }

        return redirect(route('register.verify'))
            ->with('sms_code', $code);
    }

    /**
     * Проверка кода подтверждения регистрация и создание пользователя
     *
     * @param RegisterVerifyRequest $request
     * @param RegisterUser $registerUser
     * @return JsonResponse|RedirectResponse
     */
    public function verify(RegisterVerifyRequest $request, RegisterUser $registerUser)
    {
        $registerController = new RegisterController();
        $userData = $registerUser->getUser();
        $userData['phone_verified_at'] = now();
        $response = $registerController->register($request, $userData);
        $registerUser->flush();
        return $response;
    }
}
