<!DOCTYPE HTML>
<html lang="ru">
    @include('client.parts.head')
<body>

@include('client.layouts.header')

<!-- Main -->
<div id="main">
    @include('client.pages.index')

    @include('client.pages.blog')

    @include('client.pages.portfolio')

    @include('client.pages.about')

    @include('client.pages.contact')
</div>

@include('client.parts.footer')

{{--@include('client.parts.script')--}}

@stack('script')

</body>
</html>