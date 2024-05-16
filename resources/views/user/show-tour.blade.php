@extends('layout.layout')



@section('content')
    <div class="container">

<div class="intro-tour" >
    <div class="image-tour" style="display:grid;">

    <img src="{{ '../storage/' . $tour->main_image }}">
        <div class="content-image" style="position: absolute; display: grid">

            <div class="div-group_time">
                <div class="div-begin_tour">
                    <p>Начало:</p> <p>
                        {{date('H:m', strtotime($tour->begin_tour))}}
                    </p>
                </div>
                <div class="div-duration_tour">
                    <p>
                        {{
$tour->duration_tour
}}
                    </p>
                </div>
            </div>

            <div class="div-title-tour">
                <h5 style="font-weight: bold" class="card-title">{{$tour->title}}</h5>
            </div>
        </div>


    </div>

    </div>





</div>

        <div class="guides">
            <div class="container-default">

                <div class="inner__guides">
                    <h1 class="title__guides uppercase">
                        Гиды Экскурсии
                    </h1>
                    @foreach($guides as $guid)
                        <div class="cols__guides">
                            <div class="col-guids">
                                <div class="img_guid-container">
                                    <img src="{{'storage/' . $tour->guid->image_guid}}">
                                </div>
                                <div class="description-guid">
                                    <div class="guid-title-container">
                                        <h3 class="guid-title">{{$tour->guid->name}}</h3>

                                        <h3 class="guid-title" style="margin-left: 30px">{{$tour->guid->surname}}</h3>
                                    </div>

                                    <div class="experience-guid">
                                        <div class="img-icon">
                                            <img src="{{Vite::asset('resources/img/icons/experience-icon.jpeg')}}" alt="">
                                        </div>
                                        Опыт работы: <strong>{{$tour->guid->year_work}} года</strong>
                                    </div>
                                    <div class="quality-guid">
                                        <strong class="bold-guid">Качества гида:      </strong>
                                        <span>
                                    {!! $tour->guid->guides_quality !!}
                                    </span>

                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection




