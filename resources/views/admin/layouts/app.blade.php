<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('admin.parts.head')

<body>
    <div id="app">
        @include('admin.layouts.header')

        <div class="wrapper">

            @yield('sideLeft')

            @yield('content')

        </div>
    </div>

    @include('admin.parts.scripts')

</body>
</html>
