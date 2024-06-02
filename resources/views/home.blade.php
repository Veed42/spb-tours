@extends('layout.layout')



@section('content')
    <div class="container">
        <div class="intro">
            <div class="front-intro"></div>
                <div class="description-intro">
                    <p class="description__into">
                        Окунись в мир архитектуры и истории города
                    </p>
                    <h1 class="title__intro">
                        культурный туризм <br>по Санкт-Петербургу

                    </h1>


                </div>
        </div>
    </div>

        <div class="company">
            <div class="container-default">

                <div class="inner__company">
                    <h1 class="title__company uppercase">
                        Преимущества
                    </h1>
                    <div class="cols__company--info">
                        <div class="col">
                            <div class="img__company--info">
                                <img src="{{Vite::asset('resources/img/company-info/map-review-icon.png')}}" alt="icons" class="img__info">
                            </div>
                            <div class="info__company">
                                <h4 class="subtitle__company--info">
                                    Разнообразие <br>экскурсий
                                </h4>
                                <p class="description__company">
                                    Захватывающая архитектура, неизвестные исторические долины города, закрытая военная часть - каждый найдет что-то свое
                                </p>
                            </div>

                        </div>

                        <div class="col">
                            <div class="img__company--info">
                                <img src="{{Vite::asset('resources/img/company-info/competitive-prices-icon.png')}}" alt="icons" class="img__info">
                            </div>
                            <div class="info__company">
                                <h4 class="subtitle__company--info">
                                    Доступные <br>цены
                                </h4>
                                <p class="description__company">
                                    Здесь можно отправиться в путешествие как и семейным парам с детьми, так и каждому желающему - это того стоит
                                </p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="img__company--info">
                                <img src="{{Vite::asset('resources/img/company-info/reservation-icon.png')}}" alt="icons" class="img__info">
                            </div>
                            <div class="info__company">
                                <h4 class="subtitle__company--info">
                                    Удобное <br>бронирование
                                </h4>
                                <p class="description__company">
                                    За несколько кликов при указании почты и номера телефона есть возможность забронировать место в туре заранее
                                </p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="img__company--info">
                                <img src="{{Vite::asset('resources/img/company-info/review-icon.png')}}" alt="icons" class="img__info">
                            </div>
                            <div class="info__company">
                                <h4 class="subtitle__company--info">
                                    Возможность оставить мнение о нас
                                </h4>
                                <p class="description__company">
                                    Делитесь впечатлениями с теми, кто также планирует совершить путешествие в экскурсионные туры
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--    --}}
    <div class="guides">
        <div class="container-default">

            <div class="inner__guides">
                <h1 class="title__guides uppercase">
                    Гиды
                </h1>
                @foreach($guides as $guid)
                    <div class="cols__guides">
                        <div class="col-guids">
                            <div class="img_guid-container">
                                <img src="{{'storage/' . $guid->image_guid}}">
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
                                <div class="form-group">
                                    <a href="{{route('guid.show', $guid)}}"
                                       style="padding: 10px 15px; background-color: #ffc61b;"
                                       class="btn-tour">Перейти к Гиду</a>
                                </div>
                            </div>


                        </div>

                @endforeach
                </div>
            </div>
        </div>
    </div>

{{--excursions block--}}
            <div class="excursions">
                    <div class="container-default">
                        <div class="inner__excursions">
                            <h1 class="title__excursions uppercase">
                                Экскурсии
                            </h1>

                            <div class="tours-container" >
                                    @foreach($tours as $tour)

                                        <div class="card-tour " >
                                            <div class="img-card"
                                                 style="background-image: url('{{ 'storage/' . $tour->preview_image }}');
                                            background-repeat: no-repeat;
                                            background-size: cover">
{{--                                                <img src="{{asset( 'storage/' . $tour->preview_image)}}" class="card-img-top" alt="">--}}
                                                <div class="content-image">
                                                    <div class="div-category">
                                                        <h5 >{{$tour->category->title}}</h5>
                                                    </div>
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


                                                </div>
                                                <div class="div-title-tour">
                                                    <h5 style="font-weight: bold" class="card-title">{{$tour->title}}</h5>
                                                </div>

                                            </div>


                                            <div class="card-body">
                                                <h3 class="price-title mb-5 blue font-weight-bold" style="font-weight: bold">
                                                    {{$tour->price}}/чел
                                                </h3>
                                               <ul class="text-body list-group">
                                                   <li class="item-group-waiting_description">
                                                       {!! $tour->waiting_for_programs !!}
                                                   </li>

                                               </ul>
                                                <div class="form-group">
                                                    <a href="{{route('tour.show', $tour)}}" class="btn-tour">Перейти к туру</a>
                                                </div>

                                            </div>

                                        </div>
                                    @endforeach

                            </div>

                        </div>
                    </div>
            </div>

    <div class="contacts">
                <div class="container-default">
                    <div class="inner__contacts">
                        <h1 class="title__contacts uppercase">Контакты</h1>
                        <div class="content__contacts">
                            <div class="description__contacts">
                                <div class="contacts__address"> <p>Российская Федерация, г. Москва, ул Лужники, дом 54Б, 2 этаж, корпус 6, туристическое агентство “TravelRussia</p></div>
                                <div class="contacts__phone"><p>+ 7(987) 345 92 61</p> <p>+ 7(987) 768 98 45</p></div>
                                <div class="contacts__social">
                                    <a href="" class="vk__icon">
                                        <img src="{{Vite::asset('resources/img/icons/icon-vk.jpeg')}}" class="img__social"  alt="">
                                    </a>
                                    <a href="" class="whatsapp__icon">
                                        <img src="{{Vite::asset('resources/img/icons/icon-whatsapp.jpeg')}}" class="img__social"  alt="">
                                    </a>
                                    <a href="" class="mail__icon">
                                        <img src="{{Vite::asset('resources/img/icons/icon-mail.jpeg')}}" class="img__social"  alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="map__company">
                                <div id="map" class="map">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="reviews">
        <div class="container-default">
            <h1 class="title__reviews uppercase">Отзывы</h1>
            <div class="inner__reviews">

                <div class="cols-reviews swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="col">
                                <div class="info-reviews">
                                    <div class="up-reviews">
                                        <div class="left-reviews">
                                            <div class="user__reviews__img"><img  crossorigin="" src="{{Vite::asset('resources/img/reviews-img/img-reviews.png')}}" alt="" ></div>
                                            <div class="info-user__reviews">
                                                <div class="date-user__reviews"><span>20 СЕНТЯБРЯ 2023</span></div>
                                                <div class="sub-title__reviews">Алена Трофимова</div>
                                            </div>

                                        </div>
                                        <div class="rating-review">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#d9d9d9"/>

                                            </svg>
                                        </div>
                                    </div>
                                    <div class="down-reviews">
                                        <div class="description-reviews">
                                            Санкт-Петербург - король исскуства и культуры, собранное в одном городе. Но при этом, ночью тут тоже не соскучиться ) Здесь есть все и для молодежи, и для семьи с детьми. Была тут с семьей - мамой, папой и сестрой.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col ">
                                <div class="info-reviews">
                                    <div class="up-reviews">
                                        <div class="left-reviews">
                                            <div class="user__reviews__img"><img src="{{Vite::asset('resources/img/reviews-img/img-reviews-2.png')}}" alt=""></div>
                                            <div>
                                                <div class="date-user__reviews"><span>1 НОЯБРЯ 2023</span></div>
                                                <div class="sub-title__reviews">Алексей Филин</div>
                                            </div>

                                        </div>
                                        <div class="rating-review">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#d9d9d9"/>

                                            </svg>
                                        </div>
                                    </div>
                                    <div class="down-reviews">
                                        <div class="description-reviews">
                                            Не ожидал, что этот город западет мне в душу. Явно больше 4 дней надо брать для путешествий! Не все успеешь
                                            посмотреть!
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div  class="swiper-slide">
                            <div class="col">
                                <div class="info-reviews">
                                    <div class="up-reviews">
                                        <div class="left-reviews">
                                            <div class="user__reviews__img"><img class="round" crossorigin="" src="{{Vite::asset('resources/img/reviews-img/img-reviews.png')}}" alt="" ></div>
                                            <div class="info-user__reviews">
                                                <div class="date-user__reviews"><span>20 СЕНТЯБРЯ 2023</span></div>
                                                <div class="sub-title__reviews">Алена Трофимова</div>
                                            </div>

                                        </div>
                                        <div class="rating-review">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#d9d9d9"/>

                                            </svg>
                                        </div>
                                    </div>
                                    <div class="down-reviews">
                                        <div class="description-reviews">
                                            Санкт-Петербург - король исскуства и культуры, собранное в одном городе. Но при этом, ночью тут тоже не соскучиться ) Здесь есть все и для молодежи, и для семьи с детьми. Была тут с семьей - мамой, папой и сестрой.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="info-reviews">
                                    <div class="up-reviews">
                                        <div class="left-reviews">
                                            <div class="user__reviews__img"><img src="{{Vite::asset('resources/img/reviews-img/img-reviews-2.png')}}" alt=""></div>
                                            <div>
                                                <div class="date-user__reviews"><span>1 НОЯБРЯ 2023</span></div>
                                                <div class="sub-title__reviews">Алексей Филин</div>
                                            </div>

                                        </div>
                                        <div class="rating-review">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#ffd700"/>

                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                                <path d="M12 0L14.6803 8.31088L23.4127 8.2918L16.3368 13.4091L19.0534 21.7082L12 16.56L4.94658 21.7082L7.66318 13.4091L0.587322 8.2918L9.3197 8.31088L12 0Z" fill="#d9d9d9"/>

                                            </svg>
                                        </div>
                                    </div>
                                    <div class="down-reviews">
                                        <div class="description-reviews">
                                            Не ожидал, что этот город западет мне в душу. Явно больше 4 дней надо брать для путешествий! Не все успеешь
                                            посмотреть!
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-scrollbar"></div>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </div>
@endsection




