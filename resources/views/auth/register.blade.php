@extends('layout.auth-layout')
@section('content')

<div class="container-v100 vh-100">
    <div class="row ">
        <div class="col-md-8">
<div class="card-container">
    <div class="card-header-up">
        <div class="item-header-up container-logo">
            <a class="link-logo" href="">
                <img src="{{Vite::asset('resources/img/logo-site.svg')}}">
            </a>
        </div>
        <div class="item-header-up">
            <a href="{{route('/')}}">На главную</a>
        </div>

    </div>
    <div class="card">


        <div class="card-body">
            <div class="card-header">{{ __('Регистрация') }}</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">

                    <div class="col-md-6">
                        <input id="name"
                               type="text"
                               class="form-control
                               @error('name') is-invalid @enderror"
                               name="name"
                               value="{{ old('name') }}" required autocomplete="name" placeholder="Ваше имя" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-6">
                        <input
                            id="email"
                            type="email"
                            class="form-control
                            @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required placeholder="Email" autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">

                    <div class="col-md-6">
                        <input id="phone"
                               type="tel"
                               class="form-control
                               @error('phone') is-invalid @enderror"
                               name="phone"
                               value="{{ old('tel') }}" placeholder="Номер телефона" required autocomplete="tel">

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">

                    <div class="col-md-6">
                        <input
                            id="password"
                            type="password"
                            class="form-control
                            @error('password') is-invalid @enderror"
                            name="password" placeholder="Пароль" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Подтверждение пароля" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                <div class="account-register">
                    <a href="{{route('login')}}">
                       Есть аккаунт? Войти
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

        </div>
    </div>
</div>
@endsection
