@extends('layout.layout')
@section('content')
<div class="container">
    <div class="intro-order">

            <div class="title-order-container">
                <h1 class="title-order">
                    Мои заказы
                </h1>
            </div>
        <div class="container-orders">
            <table style="width: 100%; text-align: center;border-collapse: collapse;border:  1px solid black; ">
                <thead class="" style="border-collapse: collapse;border:  1px solid black;padding: 10px 20px">
                <tr >
                    <th scope="col">Название тура</th>
                    <th scope="col">Время</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Посмотреть</th>
                </tr>
                </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->tour->title}}</td>
                <td>{{$order->time_tour->format('h:i')}}</td>
                <td>{{$order->date_tour->format('d.m.Y')}}</td>
            </tr>


{{--                @dump($order->name)--}}
            @endforeach
            </tbody>
            </table>



        </div>


</div>
</div>
@endsection

