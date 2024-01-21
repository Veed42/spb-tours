<div class="footer">
    <div class="footer__col">
        <div class="logo">
            <a href="">
                <h1>
                    логотип
                </h1>
            </a>
        </div>
        <p>
            Экскурсии <br>на каждый день
        </p>
    </div>
    <div class="footer__col">
        <ul class="footer__list">
            <li class="footer__item">
                <a href="" class="footer__link">О компании</a>
            </li>

            <li class="footer__item">
                <a href="" class="footer__link">Экскурсии</a>
            </li>

            <li class="footer__item">
                <a href="" class="footer__link">Контакты</a>
            </li>

            <li class="footer__item">
                <a href="" class="footer__link">Отзывы</a>
            </li>

            <li class="footer__item">
                <a href="" class="footer__link">Избранное</a>
            </li>
        </ul>
    </div>
    <div class="footer__col">
        <ol class="header__body--ol-list">
            @guest
                <li class="header__item">
                    <a href="{{route('login')}}" class="header__link">Войти</a>
                </li>
                @if (Route::has('user.register'))
                    <li class="header__item">
                        <a href="{{route('user.register')}}" class="header__link">Зарегистрироваться</a>
                    </li>
                @endif
            @else
                <li class="header__item">
                    <a class="header__link"
                       href="{{route('partials.index')}}"
                    >Личный кабинет
                    </a>
                </li>
                <li class="header__item">
                    <a href="{{route('logout')}}"
                       class="header__link"
                       onclick="
                        document.getElementById('logout-form').submit();"
                    >
                        Выйти
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
</div>

{{-- Footer--}}
