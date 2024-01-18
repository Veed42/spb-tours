@extends('layout.layout')

@section('tittle', 'Home page')


@section('content')
    <div class="container">
        <div class="intro">
            <div class="description-intro">
                <p class="description__into">
                    Окунись в мир архитектуры и истории города
                </p>
                <h1 class="tittle__intro">
                    кульутрный туризм <br>по Санкт-Петербургу

                </h1>
            </div>
            <div class="search-intro">
                @csrf
                <form method="get">
                    <input type="search">
                    <button type="submit">
                        Актуальные
                    </button>
                </form>
            </div>
        </div>

        <div class="company">
            <div class="container-default">
                <div class="inner__company">
                    <h1 class="tittle__company uppercase">
                        О компании
                    </h1>
                    <div class="cols__company--info">
                        <div class="col">
                            <div class="img__company--info">
                                <img src="" alt="icons" class="img__info">
                            </div>
                            <div class="info__company">
                                <h4 class="subtitle__company--info">
                                    Разнообразие экскурсий
                                </h4>
                                <p class="description__company">
                                    Захватывающая архитектура, неизвестные исторические долины города, закрытая военная часть - каждый найдет что-то свое
                                </p>
                            </div>

                        </div>

                        <div class="col">
                            <div class="img__company--info">
                                <img src="" alt="icons" class="img__info">
                            </div>
                            <div class="info__company">
                                <h4 class="subtitle__company--info">
                                    Доступные цены
                                </h4>
                                <p class="description__company">
                                    Здесь можно отправиться в путешествие как и семейным парам с детьми, так и каждому желающему - это того стоит
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="img__company--info">
                                <img src="" alt="icons" class="img__info">
                            </div>
                            <div class="info__company">
                                <h4 class="subtitle__company--info">
                                    Удобное бронирование
                                </h4>
                                <p class="description__company">
                                    За несколько кликов при указании почты и номера телефона есть возможность забронировать место в туре заранее
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="img__company--info">
                                <img src="" alt="icons" class="img__info">
                            </div>
                            <div class="info__company">
                                <h4 class="subtitle__company--info">
                                    Удобное бронирование
                                </h4>
                                <p class="description__company">
                                    За несколько кликов при указании почты и номера телефона есть возможность забронировать место в туре заранее
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="excursions">
                    <div class="container-default">
                        <div class="inner__excursions">
                            <h1 class="title__excursions uppercase">
                                Экскурсии
                            </h1>
                            <div class="panel-body">
                                <ul class="category-list">
                                    <li><a href="">Актуальные</a></li>
                                    <li><a href="">Неактуальные</a></li>
                                </ul>
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
                                <div class="contacts__address"> <p>Российская Федерация, г. Москва,<br> дом 54Б, 2 этаж, корпус 6, туристическое агентство “TravelRussia”</p></div>
                                <div class="contacts__phone"><p>+ 7(987) 345 92 61</p> <p>+ 7(987) 768 98 45</p></div>
                                <div class="contacts__social">
                                    <a href="" class="vk__icon">
                                        <img src="public/storage/img/icons/icon-vk.png" class="img__social" >
                                    </a>
                                    <a href="" class="whatsapp__icon">
                                        <img src="public/storage/img/icons/icon-whatsapp.png" class="img__social" >
                                    </a>
                                    <a href="" class="mail__icon">
                                        <img src="public/storage/img/icons/icon-mail.png" class="img__social" >
                                    </a>
                                </div>
                            </div>
                            <div class="map__company">
                                <img src="" alt="map" class="map__company--img" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="reviews">
            <div class="container-default">
                <div class="inner__reviews">
                    <h1 class="title__reviews uppercase">Отзывы</h1>
{{--                   <div class="container__slider">Slider</div>--}}
                    <div class="cols-reviews">
                        <div class="col">
                            <div class="info-reviews">
                                <div class="up-reviews">
                                    <div class="user__reviews__img"><img src="" alt=""></div>
                                    <div class="date-user__reviews"><span>20 СЕНТЯБРЯ 2023</span></div>
                                    <div class="sub-title__reviews">Алена Трофимова</div>
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
                                        Рыбатекст используется дизайнерами, проектировщиками и
                                        фронтендерами, когда нужно быстро заполнить макеты или
                                        прототипы содержимым. Рыбатекст используется
                                        дизайнерами, проектировщиками и фронтендерами, когда
                                        нужно быстро заполнить макеты или прототипы содержимым.
                                        Фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым.
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="info-reviews">
                                <div class="up-reviews">
                                    <div class="user__reviews__img"><img src="" alt=""></div>
                                    <div class="date-user__reviews"><span>20 СЕНТЯБРЯ 2023</span></div>
                                    <div class="sub-title__reviews">Алена Трофимова</div>
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
                                        Рыбатекст используется дизайнерами, проектировщиками и
                                        фронтендерами, когда нужно быстро заполнить макеты или
                                        прототипы содержимым. Рыбатекст используется
                                        дизайнерами, проектировщиками и фронтендерами, когда
                                        нужно быстро заполнить макеты или прототипы содержимым.
                                        Фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

