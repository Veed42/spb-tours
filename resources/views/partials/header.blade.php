<header class="header">

   <div class="nav">
       <div class="container-default ">
           <div class="header__logo">
               <a href="{{route('/')}}" class="header__logo-link">
                   Санкт-Петербург
               </a>
           </div>

           <nav class="header__nav">
               <ul class="header__list">
                   <li class="header__item">
                       <a href="/#features" class="header__link">Преимущества</a>
                   </li>

                   <li class="header__item">
                       <a href="/#guides" class="header__link">Наши гиды</a>
                   </li>

                   <li class="header__item">
                       <a href="/#excursions" class="header__link">Экскурсии</a>
                   </li>

                   <li class="header__item">
                       <a href="/#contacts" class="header__link">Контакты</a>
                   </li>

                   <li class="header__item">
                       <a href="/#reviews" class="header__link">Отзывы</a>
                   </li>
                   @if(Auth::user())
                       <li class="header__item">
                           <a href="{{route('index.order')}}" class="header__link">Мои заказы</a>
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
   </div>



</header>
