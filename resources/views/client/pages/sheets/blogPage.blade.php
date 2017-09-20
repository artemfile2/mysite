@extends('client.pages.units')

@section('page')
    <section id="blog" class="two_blog">
        <div class="container">

            <header>
                <h2>Блог</h2>
            </header>

            @if (count($posts)===0)
                <p class="errors">Нет постов в моем блоге</p>
            @else
                @foreach($posts as $post)
                    <div class="items blog">
                        <img src="images/pic0{{$post->id}}.jpg" class="img-float" />
                        <div class="header-blog">
                            <p class="title item-blog">{{ $post->title }}</p>
                            <p class="author item-blog">
                                <a href="#" class="">{{ $post->user->name }}</a>
                            </p>
                            <p class="date item-blog">{{ $post->created_at}}</p>
                        </div>
                        <a href="#" class="content-blog">
                            <p> {{ $post->content}} </p>
                        </a>
                    </div>
                @endforeach
            @endif
            {{--//todo: правильный вывод пагинции страниц--}}
            <?php /*echo $posts->render(); */?>
            {{ $posts->links() }}
        </div>

    </section>
@endsection