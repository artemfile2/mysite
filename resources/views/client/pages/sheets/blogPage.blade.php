@extends('client.pages.units')

@section('page')
    <section id="blog" class="two_blog">
        <div class="container">

            <header>
                <h2>Блог</h2>
            </header>

                    <div class="items">
                        <a href="#" class="blog">
                            <p class="textblog">
                                <img src="images/pic02.jpg" class="img-float" />
                                WEB разработка много текста
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Ab ad deserunt ducimus, ex facere ipsum similique voluptate.
                                Alias amet atque consectetur eveniet facere fugiat,
                                officia quidem voluptatum! Corporis, harum veritatis.</p>
                        </a>
                    </div>

                    <div class="items">
                        <a href="#" class="blog">
                            <p class="textblog">
                                <img src="images/pic03.jpg" class="img-float" />
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Ab ad deserunt ducimus, ex facere ipsum similique voluptate.
                                Alias amet atque consectetur eveniet facere fugiat,
                                officia quidem voluptatum! Corporis, harum veritatis.</p>
                        </a>
                    </div>

                    <div class="items">
                        <a href="#" class="">
                            <p>
                                <img src="images/pic04.jpg" class="img-float" />
                                PHP
                            </p>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic05.jpg" alt="" />
                        </a>
                        {{--<header>--}}
                            <p>Laravel</p>
                        {{--</header>--}}
                    </div>

                    <div class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic06.jpg" alt="" />
                        </a>
                        {{--<header>--}}
                            <p>JQuery</p>
                        </he{{--ader>--}}
                    </div>

                    <div class="item">
                        <a href="#" class="image fit blog">
                            <img src="images/pic07.jpg" alt="" />
                        </a>
                        {{--<header>--}}
                            <p>GIT</p>
                        {{--</header>--}}
                    </div>

        </div>
    </section>
@endsection