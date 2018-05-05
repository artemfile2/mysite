@extends('client.pages.units')

@section('page')
    <section id="blog" class="two_blog">
        <div class="container">

            <header>
                <h2><strong>Новости</strong></h2>
                <div class="hr1"></div>
            </header>

            @if (count($posts)===0)
                <p class="errors">Нет постов в моем блоге</p>
            @else
                @foreach($posts as $post)
                    <div class="row">
                        <div class="col-sm-1">
                            <a href="{{ route('site.page.blogOne', $post->id) }}">
                                <img class="img-fluid img-thumbnail img-adapter"
                                    src="images/pic0{{$post->id}}.jpg"/>
                            </a>
                            {{--width="604" height="336"--}}
                        </div>
                        <div class="col-sm-3 text">
                            <div class="col-md-12">
                                <a href="{{ route('site.page.blogOne', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </div>
                            <div class="col-md-12 font70em">
                                <a href="#"><span class="icon fa-pencil f90em"> </span>
                                    {{ $post->user->name }}
                                </a>
                            </div>
                            <div class="col-md-12 font70em">
                                <div class="icon fa-calendar spacediv">
                                    {{ currentDate($post->created_at) }}
                                </div>
                                <div class="icon fa-eye spacediv"> {{ $post->viewed }} </div>
                                <div class="icon fa-comments spacediv"> 2 </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('site.page.blogOne', $post->id) }}" class="content-blog">
                                {{ $post->description }}
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