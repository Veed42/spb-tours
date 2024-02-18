@extends('layout.layout')

@section('tittle', 'Home page')


@section('content')
    <div class="container">
        <div class="intro">
            <div class="front-intro"></div>
                <div class="description-intro">
                    <p class="description__into">
                        Окунись в мир архитектуры и истории города
                    </p>
                    <h1 class="tittle__intro">
                        кульутрный туризм <br>по Санкт-Петербургу

                    </h1>

                    <div class="search-intro">
                        @csrf
                        <form method="get" class="form-search">
                            <div class="container-search">
                                <div class="control-panel">
                                        <input type="text" class="search-input" placeholder="Найти экскурсии">
                                </div>
                                   <div class="control-panel" >
                                       <button type="submit" class="search-button">
                                           Актуальные
                                       </button>
                                   </div>

                                    <label>
                                        <input type="text" class="search-input" placeholder="Найти экскурсии">
                                    </label>
                                    <button type="submit" class="search-button">
                                        Актуальные
                                    </button>
                            </div>

                        </form>
                    </div>

                </div>
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
                                <img src="{{asset('/public/storage/img/company-info/map-review-icon.png')}}" alt="icons" class="img__info">
                                <img src="{{asset('/public/storage/img/reviews-icons/map-review-icon.p')}}ng" alt="icons" class="img__info">
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
                                <img src="{{asset('/public/storage/img/company-info/competitive-prices-icon.png')}}" alt="icons" class="img__info">
                                <img src="{{asset('/public/storage/img/reviews-icons/competitive-prices-icon.png')}}" alt="icons" class="img__info">
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
                                <img src="{{asset('/public/storage/img/company-info/reservation-icon.png')}}" alt="icons" class="img__info">
                                <img src="{{asset('/public/storage/img/reviews-icons/reservation-icon.png')}}" alt="icons" class="img__info">
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
                                <img src="{{asset('/public/storage/img/company-info/review-icon.png')}}" alt="icons" class="img__info">
                                <img src="{{asset('/public/storage/img/reviews-icons/review-icon.png')}}" alt="icons" class="img__info">
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
                                <div class="contacts__address"> <p>Российская Федерация, г. Москва,дом <br>54Б, 2 этаж, корпус 6, туристическое
                                        <br> агентство “TravelRussia”</p></div>
                                <div class="contacts__phone"><p>+ 7(987) 345 92 61</p> <p>+ 7(987) 768 98 45</p></div>
                                <div class="contacts__social">
                                    <a href="" class="vk__icon">
                                        <img src="{{asset('/public/storage/img/icons/icon-vk.jpeg')}}" class="img__social"  alt="">
                                    </a>
                                    <a href="" class="whatsapp__icon">
                                        <img src="{{asset('/public/storage/img/icons/icon-whatsapp.jpeg')}}" class="img__social"  alt="">
                                    </a>
                                    <a href="" class="mail__icon">
                                        <img src="{{asset('/public/storage/img/icons/icon-mail.jpeg')}}" class="img__social"  alt="">
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
                                                <div class="user__reviews__img"><img class="round" crossorigin="" src="{{asset('public/storage/img/reviews-img/img-reviews.png')}}" alt="" ></div>
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
                                                <div class="user__reviews__img"><img src="{{asset('/storage/app/public/img/reviews-img/img-reviews-2.png')}}" alt=""></div>
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
                                                <br> посмотреть!
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
                                                <div class="user__reviews__img"><img class="round" crossorigin="" src="{{asset('public/storage/img/reviews-img/img-reviews.png')}}" alt="" ></div>
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
                    <h1 class="title__reviews uppercase">Отзывы</h1>
                    <div class="cols-reviews slider">
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


                                <div class="col ">
                                    <div class="info-reviews">
                                        <div class="up-reviews">
                                            <div class="left-reviews">
                                                <div class="user__reviews__img"><img src="{{asset('/storage/app/public/img/reviews-img/img-reviews-2.png')}}" alt=""></div>
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
                                                <br> посмотреть!
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


                        <div class="swiper-scrollbar"></div>





            </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

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

@endsection




