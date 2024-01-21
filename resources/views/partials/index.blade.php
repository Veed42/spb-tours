@extends('layout.layout')

@section('tittle', 'Lk')

@section('content')
    <div class="container-v100 ">
        <h1>Личный кабинет</h1>
        <p>Добро пожаловать, {{ auth()->user()->name }}!</p>
        <p>Это личный кабинет постоянного покупателя нашего интернет-магазина.</p>
        <ul>
        </ul>
        <form action="{{ route('user.logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Выйти</button>
        </form>
    </div>

@endsection
