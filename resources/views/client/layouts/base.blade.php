<!DOCTYPE HTML>
<html lang="ru">
    @include('client.parts.head')
<body>

    @include('client.layouts.header')

    <div id="main">
        @yield('pages')
    </div>

    @include('client.parts.footer')
    @yield('script')

</body>
</html>