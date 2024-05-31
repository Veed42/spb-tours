@extends('layout.layout')
@section('content')
<div class="container">
    <div class="intro-order">

            <div class="title-order-container">
                <h1 class="title-order">
                    Форма заполнения данных
                </h1>
    <form action="">
        <div class="container-default">
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
                <label for="country"><label for="surname">{{__('Город*')}}</label></label>
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



            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>

    </form>
            </div>

</div>
</div>
@endsection
