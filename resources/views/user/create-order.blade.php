@extends('layout.layout')
@section('content')
<div class="container">
    <div class="intro-order">

            <div class="title-order-container">
                <h1 class="title-order">
                    Форма заполнения данных
                </h1>
            </div>
    <form action="{{route('user.store.order', $tour->id)}}"
          method="POST">
        @csrf
        <div class="container-default">
            <div class="wrapper-order" style="display: grid; align-items: center; justify-content: center">
                <div class="form-group name-group">

                    <div class="input-group">
                        <div class="custom-file">
                            <label for="name"><label for="surname">{{__('Имя*')}}</label></label>
                            <input type="text"
                                   class="@error('name') is-invalid @enderror"
                                   name="name"
                            >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group w-25">
                    <label for="surname">{{__('Телефон*')}}</label>
                    <input id="phone" type="tel" class="form-control @error('tel') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                           placeholder="Номер телефона"
                           required autocomplete="phone" autofocus>

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <label for="surname">{{__('Эл. почта*')}}</label>
                    <input
                        id="email"
                        type="email"
                        class="form-control
                            @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required placeholder="Email" autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <label for="country">{{__('Город*')}}</label>
                    <input type="text"
                           class="@error('country') is-invalid @enderror"
                           name="country"
                    >
                    @error('country')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <label for="time_tour">{{__('Время*')}}</label>
                    <input type="time"
                           class="@error('time_tour') is-invalid @enderror"
                           name="time_tour"
                    >
                    @error('time_tour')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <label for="date_tour">{{__('Дата*')}}</label>
                    <input type="date"
                           class="@error('date_tour') is-invalid @enderror"
                           name="date_tour"
                    >
                    @error('date_tour')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <label for="count_grown">{{__('Число взрослых*')}}</label>
                    <input type="number"
                           max="4"
                           min="0"
                           class="@error('count_grown') is-invalid @enderror"
                           name="count_grown"
                    >
                    @error('count_grown')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <label for="count_children">{{__('Число детей*')}}</label>
                    <input type="number"
                           max="5"
                           min="0"
                           class="@error('count_children') is-invalid @enderror"
                           name="count_children"
                    >
                    @error('count_grown')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group w-25">
                    <label for="age_children">{{__('Возраст детей*')}}</label>
                    <input type="number"
                           max="14"
                           min="6"
                           class="@error('age_children') is-invalid @enderror"
                           name="age_children"
                    >
                    @error('count_grown')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="hidden" name="tour_id" value="{{$tour->id}}">
                </div>
                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="country"><label for="surname">{{__('Город*')}}</label></label>--}}
{{--                <input name="year_work"--}}
{{--                       max="20"--}}
{{--                       min="0"--}}
{{--                       type="number"--}}
{{--                       step="any"--}}
{{--                       class="form-control @error('year_work') is-invalid @enderror" placeholder="Опыт работы(лет)" >--}}
{{--                @error('year_work')--}}
{{--                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group" >--}}
{{--                <span class="font-weight-bolder">Качества гида</span>--}}
{{--                <textarea id="summernote" name="guides_quality" ></textarea>--}}
{{--            </div>--}}

{{--            <div class="form-group" >--}}
{{--                <span class="font-weight-bolder">Описание гида</span>--}}
{{--                <textarea class="summernote" name="description" placeholder="Описание гида"></textarea>--}}
{{--            </div>--}}




    </form>

</div>
</div>
@endsection
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
