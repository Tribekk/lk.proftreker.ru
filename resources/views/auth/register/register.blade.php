@extends('layout.register')

@php($telegramBotUsername = config('telegram.login_bot_username'))
@php($telegramLoginToken = config('telegram.login_bot_token'))

@section('content')
    <div class="w-100">

        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="pb-13 pt-lg-0 pt-5">
                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">{{ __('Регистрация') }}</h3>
                <span class="text-muted font-weight-bold font-size-h4">
                    {{ __('Уже зарегистрированы?') }}
                    <a href="{{ route('login') }}" class="text-primary font-weight-bolder">
                        {{ __('Вход') }}
                    </a>
                </span>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name" class="font-size-h6 font-weight-bolder text-dark required">{{ __('Фамилия') }}</label>
                        <input
                            id="last_name"
                            type="text"
                            class="form-control form-control-solid h-auto py-4 px-6 rounded-lg @error('last_name') is-invalid @enderror"
                            name="last_name"
                            value="{{ old('last_name') }}"
                            autocomplete="last_name">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name" class="font-size-h6 font-weight-bolder text-dark required">{{ __('Имя') }}</label>
                        <input
                            id="first_name"
                            type="text"
                            class="form-control form-control-solid h-auto py-4 px-6 rounded-lg @error('first_name') is-invalid @enderror"
                            name="first_name"
                            value="{{ old('first_name') }}"
                            autocomplete="first_name">
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="middle_name" class="font-size-h6 font-weight-bolder text-dark">{{ __('Отчество') }}</label>
                <input
                    id="middle_name"
                    type="text"
                    class="form-control form-control-solid h-auto py-4 px-6 rounded-lg @error('middle_name') is-invalid @enderror"
                    name="middle_name"
                    value="{{ old('middle_name') }}"
                    autocomplete="middle_name">
                @error('middle_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="font-size-h6 font-weight-bolder text-dark required">{{ __('Email') }}</label>
                <input
                    id="email"
                    type="email"
                    class="form-control form-control-solid h-auto py-4 px-6 rounded-lg @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="font-size-h6 font-weight-bolder text-dark required">{{ __('Пароль') }}</label>
                <input
                    id="password"
                    type="password"
                    class="form-control form-control-solid h-auto py-4 px-6 rounded-lg @error('password') is-invalid @enderror"
                    name="password"
                >
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm" class="font-size-h6 font-weight-bolder text-dark required">{{ __('Пароль еще раз') }}</label>
                <input
                    id="password-confirm"
                    type="password"
                    class="form-control form-control-solid h-auto py-4 px-6 rounded-lg @error('password_confirmation') is-invalid @enderror"
                    name="password_confirmation"
                >
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <div class="checkbox-inline @error('pd_agree') is-invalid @enderror">
                    <label class="checkbox">
                        <input type="checkbox" class="mr-3" name="pd_agree" {{ old('pd_agree') ? 'checked' : '' }}>
                        <span></span>{{ __('Даю согласие на обработку своих персональных данных') }}
                    </label>
                </div>
                <div class="mt-4">
                    <a class="font-size-h5" href="{{ url('РїРѕР»РёС‚РёРєР°_РєРѕРЅС„РёРґРµРЅС†РёР°Р»СЊРЅРѕСЃС‚Рё.pdf') }}" target="_blank">Политика конфиденциальности</a>
                </div>
                @error('pd_agree')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="pb-lg-0 pb-5">
                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                    {{ __('Создать аккаунт') }}
                </button>
            </div>
        </form>

        <div class="separator separator-dashed my-10"></div>

        <div>
            <h4 class="font-weight-bolder text-dark mb-5">{{ __('Или войдите через Telegram') }}</h4>
            <ol class="pl-4 text-muted font-size-lg mb-5">
                <li>Откройте бота <a href="{{ $telegramBotUsername ? 'https://t.me/'.$telegramBotUsername : '#' }}" target="_blank">{{ $telegramBotUsername ? '@'.$telegramBotUsername : __('нашего Telegram-бота') }}</a> и отправьте команду <code>/code</code>.</li>
                <li>Получите одноразовый код и введите его ниже.</li>
            </ol>

            @if (!$telegramBotUsername)
                <x-alert type="warning" text="Укажите TELEGRAM_LOGIN_BOT_TOKEN и TELEGRAM_LOGIN_BOT_USERNAME, затем выполните telegram:bot:register и telegram:webhook set, чтобы включить авторизацию через Telegram." :close="false"></x-alert>
            @endif

            <form method="POST" action="{{ route('register.telegram') }}">
                @csrf

                <div class="form-group">
                    <label for="telegram_code" class="font-size-h6 font-weight-bolder text-dark required">{{ __('Код из Telegram') }}</label>
                    <input
                        id="telegram_code"
                        type="text"
                        class="form-control form-control-solid h-auto py-4 px-6 rounded-lg @error('code') is-invalid @enderror"
                        name="code"
                        value="{{ old('code') }}"
                        placeholder="123456"
                    >
                    @error('code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" class="mr-3" name="pd_agree" {{ old('pd_agree') ? 'checked' : '' }}>
                        <span></span>{{ __('Подтверждаю согласие на обработку персональных данных') }}
                    </label>
                    @error('pd_agree')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                @error('telegram')
                    <x-alert type="danger" text="{{ $message }}" :close="false"></x-alert>
                @enderror

                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">
                    {{ __('Войти по коду Telegram') }}
                </button>
            </form>
        </div>
    </div>
@endsection
