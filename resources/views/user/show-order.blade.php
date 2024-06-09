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
                {{Auth::user()->order->tour->title}}

            </h3>

            <h3>
                Ваш гид
                {{Auth::user()->order->tour->guid->name}} {{Auth::user()->order->tour->guid->surname}} {{Auth::user()->order->tour->guid->patronymic}}
            </h3>



        </div>
            <div class="description-container " style=" font-size: 20px">
                <p>
                   Ваша  дата {{Auth::user()->order->date_tour->format('d.m.Y')}}
                    <br>
                    ваше время {{Auth::user()->order->time_tour->format('h:i')}}
                </p>
            </div>
<div class="div" style=" font-size: 20px">
    <p>Количество взрослых:
        {{$order->count_grown}}
    </p>
     <p>Количество детей:
        {{$order->count_children}}
    </p>
    <p>Возраст детей:
        {{$order->age_children}}
    </p>

</div>
            <div style=" font-size: 20px">
            Статус вашего заказа
                @if ($order->status == 0)
                    <span style="color: #f44cce" class="text-danger">{{ $statuses[$order->status] }}</span>
                @elseif (in_array($order->status, [1,2]))
                    <span style="color: #3ab0c3" class="text-success">{{ $statuses[$order->status] }}</span>
                @else
                    {{ $statuses[$order->status] }}
                @endif
            </div>






        </div>
    </div>
{{--    <div class="image-tour" style="display:grid;">--}}

{{--    <img src="{{ '../storage/' . $guid->image_guid }}">--}}
{{--        <div class="content-image" style="position: absolute; display: grid">--}}



{{--            <div class="div-title-tour">--}}
{{--                <h5 style="font-weight: bold" class="card-title">--}}
{{--                    {{$guid->name}}{{$guid->surname}}{{$guid->patronymic}}--}}
{{--                </h5>--}}
{{--            </div>--}}

{{--        </div>--}}


{{--    </div>--}}

{{--    <p>--}}
{{--        Опыт работы: {{$guid->year_work}}--}}
{{--    </p>--}}
{{--    <p>--}}
{{--        Опыт работы: {{$guid->guides_quality}}--}}
{{--    </p>--}}


{{--    </div>--}}



</div>



@endsection




