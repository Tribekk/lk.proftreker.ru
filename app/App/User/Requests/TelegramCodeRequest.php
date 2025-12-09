<?php

namespace App\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelegramCodeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code' => ['required', 'string', 'max:16'],
            'pd_agree' => ['accepted'],
        ];
    }

    public function messages()
    {
        return [
            'pd_agree.accepted' => __('Для авторизации через Telegram требуется согласие на обработку персональных данных.'),
        ];
    }
}
