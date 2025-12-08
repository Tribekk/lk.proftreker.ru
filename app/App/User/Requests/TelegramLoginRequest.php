<?php

namespace App\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelegramLoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => ['required'],
            'first_name' => ['nullable', 'string', 'max:191'],
            'last_name' => ['nullable', 'string', 'max:191'],
            'username' => ['nullable', 'string', 'max:191'],
            'photo_url' => ['nullable', 'string', 'max:500'],
            'auth_date' => ['required', 'integer'],
            'hash' => ['required', 'string'],
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
