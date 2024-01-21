    <header class="header">

        <div class="container-default">
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                    <!-- <img src="" alt="logo" class="header__logo-pic">  -->
                    <h1>ЛОГОТИП</h1>
                </a>
            </div>
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item">
                        <a href="" class="header__link">О компании</a>
                    </li>

                    <li class="header__item">
                        <a href="" class="header__link">Экскурсии</a>
                    </li>

                    <li class="header__item">
                        <a href="" class="header__link">Контакты</a>
                    </li>

                    <li class="header__item">
                        <a href="" class="header__link">Отзывы</a>
                    </li>
                    @if(Auth::user())
                        <li class="header__item">
                            <a href="" class="header__link">Избранное</a>
                        </li>
                    @endif
                </ul>

            </nav>

            <ol class="header__body--ol-list">
            @guest
                <li class="header__item">
                    <a href="{{route('login')}}" class="header__link">Войти</a>
                </li>
                @if (Route::has('user.register'))
                <li class="header__item">
                    <a href="{{route('user.register')}}" class="header__link">{{'Зарегистрироваться'}}</a>
                </li>
                @endif
                @else
                <li class="header__item">
                    <a class="header__link"
                       href="{{route('partials.index')}}"
                    >
                        {{'Личный кабинет'}}
                    </a>
                </li>
                <li class="header__item">
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="header__link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>


                @endif
            </ol>
        </div>

    </header>

