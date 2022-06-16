@extends('layout')
{{--<link href="/css/bootstrap-grid.min.css" rel="stylesheet">--}}

{{----}}
<link rel="stylesheet" href="/css/login.css">
@section('main_content')
    <div class="container">
        <div class="box-form">
            <h3>{{ __('Вхід') }}</h3>

            <div class="box">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="param">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Логін') }}</label>

                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="param">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                        <div class="">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="">
                        <div class="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __("Запам'ятати мене") }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="">
                            <div class="button">
                                <button type="submit" class="button-login">
                                    {{ __('Увійти') }}
                                </button>
                            </div>
                            <div class="reg-pas">

                                @if (Route::has('password.request'))
                                    <a class="forgot-password" href="{{ route('password.request') }}">
                                        {{ __('Забули свій пароль?') }}
                                    </a>
                                @endif
                                @if (Route::has('register'))
                                        <a class="reg-link"
                                           href="{{ route('register') }}">{{ __('Перейти до реєстрації') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
