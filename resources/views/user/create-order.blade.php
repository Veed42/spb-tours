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

                        <div class="">
                            <label for="name">{{__('Имя*')}}</label>
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
                <div class="form-group name-group">

                    <div class="">
                        <label for="surname">{{__('Фамилия*')}}</label>
                        <input type="text"
                               class="@error('surname') is-invalid @enderror"
                               name="surname"
                        >
                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group w-25">
                    <label for="phone">{{__('Телефон*')}}</label>
                    <input id="phone" type="tel" class="phone mask-phone form-control @error('tel') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                            autocomplete="phone" autofocus >
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
                         placeholder="Email" autocomplete="email">

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
{{--                <div class="form-group w-25">--}}
{{--                    <label for="time_tour">{{__('Время*')}}</label>--}}
{{--                    <input type="time"--}}
{{--                           class="@error('time_tour') is-invalid @enderror"--}}
{{--                           name="time_tour"--}}
{{--                    >--}}
{{--                    @error('time_tour')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
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
                <div class="form-group">
                    <input type="hidden" name="tour_id" value="{{$tour->id}}">
                </div>
                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                </div>

{{--                @if (count($errors) > 0)--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}

                <div class="form-group">
                    <input id="btn-order" type="submit" class="btn-order btn-primary">

                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
<script>
    $(document).ready(function(){
        $('.phone').inputmask('(+799)-999-9999');
    });
</script>

