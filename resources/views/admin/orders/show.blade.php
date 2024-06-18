@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-md-center ">
                        <h1 class="m-0 mr-4">Информация о заказе
                        </h1>

                        <a href="{{route('admin.order.edit', $order->id)}}" class="text-success">
                            <i class="fa fa-edit "></i>
                        </a>
                        <form action="{{route('admin.order.delete', $order->id)}}"
                              method="POST"
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent"> <i class="fas fa-trash text-danger" role="button" ></i></button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}">Домой</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-6 ">
                        <div class="card " >
                            <div class="card-body container">
                                <div class="align-items-md-center " style="display: flex">
                                    <h5 style="margin-right: 20px">Имя:</h5>
                                    <h5 class="card-title">{{$order->name}}</h5>
                                    <div class="align-items-md-center">
                                        <h5 style="margin-right: 20px">Фамилия:</h5>
                                        <h5 class="card-title">{{$order->surname}}</h5>
                                    </div>
                                </div>

                                <div class="align-items-md-center " style="display: flex">
                                    <h5 style="margin-right: 20px">Телефон:</h5>
                                    <h5 class="card-title">{{$order->phone}}</h5>

                                </div>


                                <div class="" style="display: flex">
                                    <h5 style="margin-right: 20px">
                                        email:
                                    </h5>

                                    <p class="card-text">{{$order->email}}</p>
                                </div>
{{--                                <div class="" style="display: flex">--}}
{{--                                    <h5 style="margin-right: 20px">--}}
{{--                                        время тура:--}}
{{--                                    </h5>--}}

{{--                                    <p class="card-text">{{$order->time_tour->format('h:i')}}</p>--}}
{{--                                </div>--}}
                                <div class="" style="display: flex">
                                    <h5 style="margin-right: 20px">
                                        Город:
                                    </h5>

                                    <p class="card-text">{{$order->country}}</p>
                                </div>
                                <div class="" style="display: flex">
                                    <h5 style="margin-right: 20px">
                                        Дата:
                                    </h5>

                                    <p class="card-text">{{$order->date_tour}}</p>
                                </div>


                                <div class="" style="display: flex">
                                    <h5 style="margin-right: 20px">
                                        Гид:
                                    </h5>

                                    <p class="card-text">{{$order->tour->guid->name}} {{$order->tour->guid->surname}} {{$order->tour->guid->patronymic}}</p>
                                </div>
                                <div class="" style="display: flex">
                                    <h5 style="margin-right: 20px">
                                        Тур:
                                    </h5>

                                    <p class="card-text">{{$order->tour->title}}</p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
