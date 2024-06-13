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
                        <div class="cols__guides">
                            <div class="col-guids">
                                <div class="img_guid-container">
                                    <img src="{{'../storage/' . $tour->guid->image_guid}}">
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
                                    <div class="description-container">
                                        {!! $tour->guid->description !!}
                                    </div>
                                </div>
                            </div>
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
                            @if(!$tour->program->description)
                                Описания нет
                            @endif
                            {!! $tour->program->description !!}
                        </p>
                    </div>
                    <br>


                    <div class="img_program-container">
                        @if(!$tour->program->back_image)
                            Фото нет
                        @endif
                        <img src="{{'../storage/' . $tour->program->back_image}}">
                    </div>

                <div class="container-begin_tour_banner" style="margin-top: 50px">
                    @if(!$tour->program->begin_tour_banner)
                        Краткого описания нет
                    @endif
                    <p>
                        {!! $tour->program->begin_tour_banner !!}
                    </p>
                </div>
                </div>
            </div>
{{--            @dd($tour->id)--}}
            <div class="container-review">
                <div class="container-title-reviews">
                    <h1 class="title-reviews-users">
                        Отзывы
                    </h1>
                    <div class="sub-title-reviews">
                        <p style="font-size: 32px; margin-bottom: 50px">
                            Напишите свои впечатления обо всем: начиная от гида, который вас сопровождал, заканчивая эмоциями о посещённой экскурсии
                        </p>
                        <hr>
                        <br>
                    </div>
                </div>
            <div class="shows-reviews">
                <h3>
                    Отзывы тура: {{$tour->review->count()}}
                </h3>
                @foreach($tour->review as $review)
                    <div class="div" style="display: flex; justify-content: space-between ">
                        <div class="wrapper-content" style="display:grid; border-bottom: 2px solid #F38D68">
                            <div class="container-title-user-name" >
                                <h3 class="title-user">
                                    {{$review->name}}
                                </h3>

                            </div>

                            <div class="container-content-user">
                                <p>
                                    {{$review->content}}
                                </p>
                            </div>
                        </div>

                        <div style="">
                            <p>
                                {{$review->created_at->diffForHumans()}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
                <hr>

            <form action="{{route('tour.review.store', $tour->id)}}" method="post">

                @csrf
                <div class="wrapper-review-form">
                    <div class="form-group" style="margin-bottom: 30px">
                        <input  class="text-field__input @error('name') is-invalid @enderror" type="text" name="name" placeholder="Ваше имя" >
                        <div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        <label>

                            <textarea class="@error('name') is-invalid @enderror" name="content" placeholder="Enter your message..." >

                            </textarea>
                        </label>
                        <div>
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                    </div>
                    <div class="form-group">
                        <input type="hidden"
                               name="tour_id"
                               value="{{$tour->id}}" />
                    </div>
                    <div class="form-group">
                        <input id="btn-review-submit" type="submit" value="Отправить" class="btn-review-submit">
                    </div>
                </div>

            </form>
            </div>
            <div  class="order-block" style="">
                @auth()
                    <div>
                        <a  class="btn-tour" href="{{route('user.create.order', $tour->id)}}">Забронировать тур</a>
                    </div>
                @endauth
                @guest()
                    <div class="div">
                        <p class="non-auth-tour">
                            Чтобы забронировать тур необходимо <a href="{{route('register')}}">Зарегестрироваться</a> или <a href="{{route('login')}}">Авторизоваться</a>
                        </p>
                    </div>
                    @if(auth()->user())
                    @endif
                @endguest
            </div>



            </div>
        </div>






@endsection




