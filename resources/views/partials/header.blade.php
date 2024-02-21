<header class="header">
    <div class="container-default">
        <div class="header__logo">
            <a href="/" class="header__logo-link">
                <img src="{{Vite::asset('resources/img/logo-site.svg')}}" alt="logo" class="header__logo header__logo-pic">
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
                @if (Route::has('register'))
                    <li class="header__item">
                        <a href="{{route('register')}}" class="header__link">Зарегистрироваться</a>
                    </li>
                @endif
            @else
                <li class="header__item">
                    <a href="{{route('logout')}}"
                       class="header__link"
                       onclick="
                        document.getElementById('logout-form').submit();"
                    >Выйти
                    </a>
                </li>

                <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="post"
                    style="display: none;"
                >
                    @csrf
                </form>
            @endif
        </ol>
    </div>


</header>
