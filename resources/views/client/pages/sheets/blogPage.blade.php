@extends('client.pages.units')

@section('page')
    <section id="blog" class="two_blog">
        <div class="container">

            <header>
                <h2>Блог</h2>
            </header>

                    <article class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic02.jpg" alt="" />
                            {{--<header class="headblog">--}}
                                <h3 class="headblog">WEB разработка</h3>
                            {{--</header>--}}
                        </a>
                    </article>

                    <article class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic03.jpg" alt="" />
                            {{--<header class="headblog">--}}
                                <h3 class="headblog">HTML5 - CSS3</h3>
                            {{--</header>--}}
                        </a>
                    </article>

                    <article class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic04.jpg" alt="" />
                        </a>
                        <header>
                            <h3>PHP</h3>
                        </header>
                    </article>

                    <article class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic05.jpg" alt="" />
                        </a>
                        <header>
                            <h3>Laravel</h3>
                        </header>
                    </article>

                    <article class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic06.jpg" alt="" />
                        </a>
                        <header>
                            <h3>JQuery</h3>
                        </header>
                    </article>

                    <article class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic07.jpg" alt="" />
                        </a>
                        <header>
                            <h3>GIT</h3>
                        </header>
                    </article>

        </div>
    </section>
@endsection