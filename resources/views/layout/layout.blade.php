<!doctype html>
<html lang="ru">
@include('components.head')
<body>
@include('partials.header')
    @yield('content')

@include('partials.footer')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=45ff3590-326c-42e6-8412-5d8c4ea39485&lang=ru_RU"></script>
</body>
</html>
