<!doctype html>
<html lang="ru">
@include('components.head')

<body>
<div class="front-intro"></div>

<div class="container-ath">
    <div class="container">
        @yield('content')
    </div>

</div>
<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>

</body>
</html>
