@extends('layout.auth-layout')

@section('title', 'Login page')

@section('content')
<div class="container-v100">
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
                        <div class="card-header">{{ __('Войти') }}</div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control @error('tel') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                                           placeholder="Номер телефона"
                                           required autocomplete="phone" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div>
                            <div class="account-register">
                                <a href="{{route('register')}}">
                                    Нет аккаунта? Регистрация
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
