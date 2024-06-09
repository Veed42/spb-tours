@extends('layout.layout')
@section('content')
    <div class="container-success"  style="height: 100vh">
            <div class="title-success-container"  >
                <h1 class="success-title">
                    Спасибо за бронирование!
                </h1>

            </div>
            <div class="success-description">
                <p class="start-date-order">
                    Ждем вас {{Auth::user()->order->date_tour->format('d.m.Y')}} в {{Auth::user()->order->time_tour->format('h:i')}}
                </p>


{{--                @if(!$order->time_tour)--}}
{{--                    null--}}
{{--                @endif--}}

            </div>
        <div class="contact-block">
            <h3 class="sub-title">
                Наши контакты:

            </h3>
            <div class="description__contacts-success">
                <div class="contacts__address"> <p>Российская Федерация, г. Москва, ул Лужники, дом 54Б, 2 этаж, корпус 6, туристическое агентство “TravelRussia</p></div>
                <div class="contacts__phone"><p>+ 7(987) 345 92 61</p> <p>+ 7(987) 768 98 45</p></div>
                <div class="contacts__social" style="text-align: center">
                    <a href="" class="vk__icon">
                        <img src="{{Vite::asset('resources/img/icons/icon-vk.jpeg')}}" class="img__social"  alt="">
                    </a>
                    <a href="" class="whatsapp__icon">
                        <img src="{{Vite::asset('resources/img/icons/icon-whatsapp.jpeg')}}" class="img__social"  alt="">
                    </a>
                    <a href="" class="mail__icon">
                        <img src="{{Vite::asset('resources/img/icons/icon-mail.jpeg')}}" class="img__social"  alt="">
                    </a>
                </div>
        </div>

    </div>
        <div class="div-link-container">
            <a href="{{route('/')}}" style="border-bottom: 3px solid #F38D68; padding: 10px; ">На главную</a>
            <a href="{{route('index.order')}}" style="border-bottom: 3px solid #F38D68; padding: 10px; margin-left: 30px">Мои заказы</a>
        </div>
    </div>


@endsection
