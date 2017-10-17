@extends('client.pages.units')

@section('page')
    <section id="blog" class="two_blog">
        <div class="container">

            <header>
                <h2><strong>Блог</strong></h2>
                <div class="hr1"></div>
            </header>

            @if (count($posts)===0)
                <p class="errors">Нет постов в моем блоге</p>
            @else
                @foreach($posts as $post)
                    <div class="row">
                        <div class="col-sm-1">
                            <img class="img-fluid img-thumbnail"
                                 src="images/pic0{{$post->id}}.jpg" width="304" height="236"/>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-md-12">{{ $post->title }}</div>
                            <div class="col-md-12 font70em">
                                <a href="#"> {{ $post->user->name }}</a>
                            </div>
                            <div class="col-md-12 font70em">{{ $post->created_at }}</div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="content-blog">
                                {{ $post->content }}
                            </a>
                        </div>
                    </div>
                    <div class="hr1"></div>
                @endforeach
                <div class="row pull-right">
                    {{$posts->links()}}
                </div>
            @endif
        </div>

    </section>

@endsection