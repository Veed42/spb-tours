@extends('layout.auth-layout')

@section('title', 'Login page')

@section('content')
<div class="container">
    <div class="row ">

        <div class="col-md-8">

            <div class="card-container">
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
                    <div class="card-body">
                        <div class="card-header">{{ __('Войти') }}</div>
                        <form method="POST" action="{{ route('login') }}">
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

                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control mask-phone @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                                           placeholder="Номер телефона"
                                            autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль" >
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Войти') }}
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
