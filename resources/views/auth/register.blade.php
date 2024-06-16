@extends('layout.auth-layout')
@section('content')

<div class="" >
<div class="card-container w-50" >
    <div class="card-header-up">
        <div class="item-header-up container-logo">
            <a class="link-logo" href="{{route('/')}}">
                Санкт-Петербург
            </a>
        </div>
        <div class="item-header-up">
            <a href="{{route('/')}}">На главную</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body" >
            <div class="card-header">{{ __('Регистрация') }}</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="errors " style="margin-bottom: 30px;padding: 15px 10px">
                    @if(count($errors) > 0)
                        @foreach( $errors->all() as $error )
                            <div class="">
                                <span style="color: red">{{ $error }}</span>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="w-100">

                    <div class="form-group">
{{--                        <div>--}}
{{--                            @error('name')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                        <input id="name"
                               type="text"
                               class="form-control
                               @error('name') is-invalid @enderror"
                               name="name"
                               value="{{ old('name') }}"  autocomplete="name" placeholder="Ваше имя" autofocus>
                    </div>
                </div>

                <div class="w-100">

                    <div class="form-group">
{{--                        <div>--}}
{{--                            @error('email')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                        <input
                            id="email"
                            type="email"
                            class="form-control
                            @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                             placeholder="Email" autocomplete="email">
                    </div>
                </div>
                <div class="w-100">
{{--                    <div>--}}
{{--                        @error('phone')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                @enderror--}}
{{--                        </span>--}}

{{--                    </div>--}}
                    <div class="form-group">
                        <input id="phone"
                               type="tel"
                               class="form-control mask-phone
                               @error('phone') is-invalid @enderror"
                               name="phone"
                               placeholder="Номер телефона"  autocomplete="tel"
                        >
                    </div>
                </div>
                <div class="w-100 ">
                    <div class="form-group">
{{--                        <div>--}}
{{--                            @error('password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                        <input
                            id="password"
                            type="password"
                            class="form-control
                            @error('password') is-invalid @enderror"
                            name="password" placeholder="Пароль"  autocomplete="new-password" >
                    </div>
                </div>

                <div class="w-100">

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Подтверждение пароля"  autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Зарегистрироваться') }}
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
@endsection
