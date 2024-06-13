@extends('layout.layout')
@section('content')
    <div class="container">

<div class="intro-guid" >
    <a href="{{route('index.order')}}">Назад</a>
    <div class="card" >



        <div class="card-body">

        <div class="title-guid">
            <h3 class="title-guid-inner">
                Название тура
                {{$order->tour->title}}

            </h3>

            <h3>
                Ваш гид
                {{$order->tour->guid->name}} {{$order->tour->guid->surname}} {{$order->tour->guid->patronymic}}
            </h3>




        </div>
            <div class="description-container " style=" font-size: 20px">
                <p>
                   Ваша  дата {{$order->date_tour->format('d.m.Y')}}
                    <br>
                </p>
            </div>
<div class="div" style=" font-size: 20px">
    <!--p>Количество взрослых:
        {{$order->count_grown}}
    </p-->
     <!--p>Количество детей:
        {{$order->count_children}}
    </p-->
    <!--p>Возраст детей:
        {{$order->age_children}}
    </p-->

</div>
            <div style=" font-size: 20px">
            Статус вашего заказа
                @if ($order->status == 0)
                    <span  class="text-danger">{{ $statuses[$order->status] }}</span>
                @elseif (in_array($order->status, [1,2]))
                    <span  class="text-success">{{ $statuses[$order->status] }}</span>
                @else
                    {{ $statuses[$order->status] }}
                @endif
            </div>




{{--<div class="qr-code">--}}
{{--        {!! $qrCode !!}--}}
{{--    <img src="{{route('show.order', $order,['qrCode' => $order->name])}}" alt="">--}}
{{--</div>--}}

        </div>

    </div>

</div>



@endsection




