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
                    <a href="{{route('user.login')}}" class="header__link">Войти</a>
                </li>
                @if (Route::has('user.register'))
                <li class="header__item">
                    <a href="{{route('user.register')}}" class="header__link">Зарегистрироваться</a>
                </li>
                @endif
                @else
                <li class="header__item">
                    <a class="header__link"
                       href="{{route('user.index')}}"
                    >Личный кабинет
                    </a>
                </li>
                <li class="header__item">
                    <a href="{{route('user.logout')}}"
                       class="header__link"
                        onclick="
                        document.getElementById('logout-form').submit();"
                    >Выйти
                    </a>
                </li>

                    <form
                        id="logout-form"
                        action="{{ route('user.logout') }}"
                        method="post"
                        style="display: none;"
                    >
                        @csrf
                    </form>
                @endif
            </ol>
        </div>

    </header>

