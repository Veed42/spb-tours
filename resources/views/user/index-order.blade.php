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
                    <th scope="col">Статус</th>

                </tr>
                </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->tour->title}}</td>
                <td >
                    @if ($order->status == 0)
                        <span style="color: #f44cce" class="text-danger">{{ $statuses[$order->status] }}</span>
                    @elseif (in_array($order->status, [1,2]))
                        <span style="color: #3ab0c3" class="text-success">{{ $statuses[$order->status] }}</span>
                    @else
                        {{ $statuses[$order->status] }}
                    @endif
                </td>
            <td>
                <a href="{{route('show.order', $order->id)}}">Посмотреть </a>
            </td>
            </tr>



{{--                @dump($order->name)--}}
            @endforeach
            </tbody>
            </table>



        </div>


</div>
</div>
@endsection

