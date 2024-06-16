<div class="footer">
    <div class="footer__col">
        <div class="footer-logo">
            <a href="{{route('/')}}" class="footer__logo-link">
             САНКТ-ПЕТЕРБУРГ
            </a>
        </div>
        <p class="footer__sub-title">
            Экскурсии <br>на каждый день
        </p>
    </div>
    <div class="footer__col footer-col__2">
        <ul class="footer__list">
            <li class="footer__item">
                <a href="/#features" class="footer__link">Преимущества</a>
            </li>
            <li class="header__item">
                <a href="/#guides" class="header__link">Наши гиды</a>
            </li>
            <li class="footer__item">
                <a href="/#excursions" class="footer__link">Экскурсии</a>
            </li>
            <li class="footer__item">
                <a href="/#contacts" class="footer__link">Контакты</a>
            </li>
                <li class="footer__item">
                    <a href="/#reviews" class="footer__link">Отзывы</a>
                </li>
            @if(Auth::user())
                <li class="header__item">
                    <a href="{{route('index.order')}}" class="header__link">Мои заказы</a>
                </li>
            @endif


        </ul>
    </div>
    <div class="footer__col footer__col3">
        <ol class="footer__auth-list">
            @guest
                <li class="footer__item">
                    <a href="{{route('login')}}" class="footer__link">Войти</a>
                </li>
                @if (Route::has('register'))
                    <li class="footer__item">
                        <a href="{{route('register')}}" class="footer__link">Зарегистрироваться</a>
                    </li>
                @endif
            @else
                <li class="footer__item">
                    <a href="{{route('logout')}}"
                       class="footer__link"
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
