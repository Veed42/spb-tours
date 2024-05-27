@extends('layout.layout')
@section('content')
    <div class="container">

<div class="intro-guid" >
    <a href="{{route('/')}}">Назад</a>
    <div class="card" >
        <div>
            <img src="{{asset( '../storage/' . $guid->image_guid)}}" class="card-img-top" alt="">
            <h1 class="mb-5 blue">

            </h1>
        </div>


        <div class="card-body">

        <div class="title-guid">
            <h3 class="title-guid-inner">
                {{$guid->name}}
                {{$guid->surname}}
                {{$guid->patronymic}}

            </h3>

        </div>
            <div class="description-container">
                <div class="quality-guid">
                    <strong class="bold-guid">Качества гида:      </strong>
                    <span>
                                    {!!  $guid->guides_quality!!}
                                    </span>

                </div>
                <div class="quality-guid">
                    <strong class="bold-guid">Опыт работы:      </strong>
                    <span>
                                    {!! $guid->year_work !!}
                                    </span>

                </div>
                <p class="card-text description-guid"> <strong> Описание гида</strong> <br>
                    {!!  $guid->description !!}
                </p>
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




