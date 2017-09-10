<!-- Index -->
@section('index')
    <section id="top" class="one dark cover">
        <div class="container">

            <header>

                @php
                //TODO: в зависимости от времени суток писать приветствие
                @endphp

                <h2 class="alt">Привет! Я <strong>Web разработчик</strong>, шаблон с сайта<a href="http://html5up.net/license">free</a> responsive<br />
                    site template designed by <a href="http://html5up.net">HTML5 UP</a>.</h2>
                <p>Данный сайт моя работа c beck-end на PHP<br>
                    с применяемыми технологиями такими как:<br>
                    laravel git jquery.</p>
            </header>

            <footer>
                <a href="#blog" class="button scrolly">Блог</a>
                <a href="#portfolio" class="button scrolly">Портфолио</a>
                <a href="#contacts" class="button scrolly">Контакты</a>
            </footer>

        </div>
    </section>
@endsection
