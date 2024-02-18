<div class="footer">
    <div class="footer__col">
        <div class="footer-logo">
            <a href="/" class="footer__logo-link">
                <img src="/public/storage/img/logo-site.svg" alt="">
            </a>
        </div>
        <p class="footer__sub-title">
            Экскурсии <br>на каждый день
        </p>
    </div>
    <div class="footer__col footer-col__2">
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
                    <a class="footer__link"
                       href="{{route('user.index')}}"
                    >Личный кабинет
                    </a>
                </li>
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
