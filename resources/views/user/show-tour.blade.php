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

            <div class="div-title-tour" style="margin-bottom: 150px">
                <h5 style="font-weight: bold" class="card-title">{{$tour->title}}</h5>
            </div>
        </div>


    </div>

    </div>
        <div class="container-default">
            <div class="guides">

                <div class="inner__guides">
                    <h1 class="title__guides uppercase">
                        Гиды Экскурсии
                    </h1>
                    @foreach($guides as $guid)
                        <div class="cols__guides">
                            <div class="col-guids">
                                <div class="img_guid-container">
                                    <img src="{{'../storage/' . $guid->image_guid}}">
                                </div>
                                <div class="description-guid">
                                    <div class="guid-title-container">
                                        <h3 class="guid-title">{{$guid->name}}</h3>

                                        <h3 class="guid-title" style="margin-left: 30px">{{$guid->surname}}</h3>
                                    </div>

                                    <div class="experience-guid">
                                        <div class="img-icon">
                                            <img src="{{Vite::asset('resources/img/icons/experience-icon.jpeg')}}" alt="">
                                        </div>
                                        Опыт работы: <strong>{{$guid->year_work}} года</strong>
                                    </div>
                                    <div class="quality-guid">
                                        <strong class="bold-guid">Качества гида:      </strong>
                                        <span>
                                    {!! $guid->guides_quality !!}
                                    </span>

                                    </div>
                                    <div class="description-container">
                                        {!! $guid->description !!}
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>


            </div>


        <div class="container-program_tour" style="margin-bottom: 150px">
            <h1 class="title_program uppercase">
                Программа тура
            </h1>
            <div class="inner-program">
{{--                    <h3 >--}}
{{--                        {{$tour->program->title}}--}}
{{--                        {{$tour->program->tour_id}}--}}
{{--                    </h3>--}}

                    <div class="container-description_program">
                        <p>
                            {!! $tour->program->description !!}
                        </p>
                    </div>
                    <br>


                    <div class="img_program-container">
                        <img src="{{'../storage/' . $tour->program->back_image}}">
                    </div>

                <div class="container-begin_tour_banner" style="margin-top: 50px">
                    <p>
                        {!! $tour->program->begin_tour_banner !!}
                    </p>
                </div>
                </div>
            </div>
            <div class="container-review">
                <h1 class="title-reviews-users">
                    Отзывы
                </h1>
                <p style="font-size: 32px; margin-bottom: 50px">
                    Напишите свои впечатления обо всем: начиная от гида, который вас сопровождал, заканчивая эмоциями о посещённой экскурсии
                </p>
            <form>
                <div class="wrapper-review-form">
                    <div class="form-group" style="margin-bottom: 30px">
                        <input class="text-field__input" type="text" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                    <textarea placeholder="Enter your message..." >

                    </textarea>
                    </div>
                </div>



            </form>
            </div>
            <div class="order-block " style="display: flex; justify-content:center;align-items: center">
                <a  class="btn-tour" href="{{route('create.order', $tour->id)}}">Забронировать тур</a>
            </div>

            </div>
        </div>






@endsection




