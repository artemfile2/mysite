<!-- Blog -->
@section('blog')
    <section id="blog" class="two_blog">
        <div class="container">

            <header>
                <h2>My Blog</h2>
            </header>

            <p>Тут буду писать все подряд и вести свой блог</p>
            <p>Последнии посты</p>

            <div class="row">
                <div class="4u 12u$(mobile)">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                        <header>
                            <h3>WEB разработка</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                        <header>
                            <h3>HTML5 - CSS3</h3>
                        </header>
                    </article>
                </div>
                <div class="4u 12u$(mobile)">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                        <header>
                            <h3>PHP</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
                        <header>
                            <h3>Laravel</h3>
                        </header>
                    </article>
                </div>
                <div class="4u$ 12u$(mobile)">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
                        <header>
                            <h3>JQuery</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
                        <header>
                            <h3>GIT</h3>
                        </header>
                    </article>
                </div>
            </div>
        </div>
        <a href="{{ route('site.page.blog') }}" class="button scrolly">Читать все</a>
    </section>
@endsection