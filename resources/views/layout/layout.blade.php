<!doctype html>
<html lang="ru">
@include('components.head')
<body>
<div class="container">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</div>


</body>
</html>
