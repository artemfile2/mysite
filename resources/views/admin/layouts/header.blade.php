<header class="main-header hidden-print">
    <a class="logo" href="{{route('site.page.index')}}">
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