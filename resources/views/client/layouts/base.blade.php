<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
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