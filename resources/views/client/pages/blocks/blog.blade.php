<!-- Blog -->
@section('blog')
    <section id="blog" class="two_blog">
        <div class="container">

            <header>
                <h2>My Blog</h2>
            </header>

            <p>Тут буду писать все подряд и вести свой блог</p>
            <p>Последнии посты</p>

            {{--todo: реализовать шаблон для чтения отдельного поста--}}

            <div class="row">

                @for($i=0; $i<=2; $i++)
                    <div class="4u 12u$(mobile)">
                        @foreach($posts as $post)
                            <article class="item">
                                <a href="#" class="image fit"><img src="images/pic0{{$post->id}}.jpg" alt="" /></a>
                                <header>
                                    <h3>{{$post->title}}</h3>
                                </header>
                            </article>
                            @php
                                $posts->shift()
                            @endphp

                            @if($loop->index == 1)
                                @break
                            @endif
                        @endforeach
                    </div>
                @endfor

            </div>
        </div>
        <a href="{{ route('site.page.blog') }}" class="button scrolly">Читать все</a>
    </section>
@endsection