@extends('admin.layouts.main')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование заказа</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Редактирование заказа</li>
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
                    <div class="col-12">

                        <form action="{{route('admin.order.update', $order->id)}}"
                              method="POST"
                              class="w-25">
                            @csrf
                            @method('PATCH')
                            <div class="form-group name-group">
                                    <div class="form-group">
                                        <label for="name">{{__('Имя*')}}</label>
                                        <input type="text"
                                               class="form-control @error('name') is-invalid @enderror"
                                               value="{{$order->name}}"
                                               name="name"
                                        >
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-group ">
                                <label for="surname">{{__('Телефон*')}}</label>
                                <input id="phone" max="10" type="tel" class="phone form-control @error('tel') is-invalid @enderror" name="phone" value="{{ $order->phone }}"
                                       required autocomplete="phone" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="surname">{{__('Эл. почта*')}}</label>
                                <input
                                    id="email"
                                    type="email"
                                    class="form-control
                            @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ $order->email }}"
                                    required placeholder="Email" autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="country">{{__('Город*')}}</label>
                                <input type="text"
                                       class=" form-control @error('country') is-invalid @enderror"
                                       name="country"
                                       value="{{$order->country}}"
                                >
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="time_tour">Начало тура</label>
                                <input name="time_tour"
                                       type="time"
                                       value="{{$order->time_tour->format('h:i')}}"
                                       class="form-control @error('begin_tour') is-invalid @enderror" placeholder="Начало тура" >
                                @error('time_tour')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                               Дата  <label for="date_tour" >{{$order->date_tour->format('d-m-y')}}</label>
                                    <input type="date"
                                           class="form-control @error('date_tour') is-invalid @enderror"
                                           name="date_tour"
                                           value="{{$order->date_tour->format('"Y-m-d')}}"
                                    >
                                @error('date_tour')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="count_grown">{{__('Число взрослых*')}}</label>
                                <input type="number"
                                       max="4"
                                       min="0"
                                       class="form-control @error('count_grown') is-invalid @enderror"
                                       name="count_grown"
                                       value="{{$order->count_grown}}"
                                >
                                @error('count_grown')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="count_children">{{__('Число детей*')}}</label>
                                <input type="number"
                                       max="5"
                                       min="0"
                                       class="form-control @error('count_children') is-invalid @enderror"
                                       name="count_children"
                                       value="{{$order->count_children}}"
                                >
                                @error('count_children')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="age_children">{{__('Возраст детей*')}}</label>
                                <input type="number"
                                       max="14"
                                       min="6"
                                       class="form-control @error('age_children') is-invalid @enderror"
                                       name="age_children"
                                       value="{{$order->age_children}}"

                                >
                                @error('count_grown')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <span class="mb-3">Статус заявки</span>
                                <div class="mt-2">
                                    @php $status = old('status') ?? $statement->status ?? 0 @endphp
                                    <select name="status" class="form-control" title="Статус заказа">
                                        @foreach ($statuses as $key => $value)
                                            <option  value="{{ $key }}" @if ($key == $status) selected @endif>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Выберите тур</label>
                                <select name="guid_id"
                                        class="form-control">
                                    @foreach($tours as $tour)
                                        <option value="{{$order->tour->id}}"
                                            {{$tour->id == $tour->tour_id ? 'selected' : ''}}
                                        >{{$tour->title}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('guid_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                    <!-- ./col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content -->


@endsection

