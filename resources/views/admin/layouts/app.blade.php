
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mainAdmin.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="app">
    <header class="main-header hidden-print">
        <a class="logo" href="#">
            {{ config('app.name', 'Laravel') }}
        </a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    @guest
                        <li><a href="{{ route('login') }}">Вход</a></li>
                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                    @else
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user fa-lg"> {{ Auth::user()->name }}</i>
                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Настройки</a></li>
                            <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Профиль</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-lg"></i>Выход
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endguest
            </div>
        </nav>
    </header>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/mainAdmin.js') }}"></script>
</body>
</html>
