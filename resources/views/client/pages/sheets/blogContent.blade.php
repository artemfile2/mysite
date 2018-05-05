@extends('client.pages.units')

@section('page')
    <section id="blog" class="two_blog">
        <div class="container">

                <div class="">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="#"><i class="icon fa-home"></i>
                                <span class="sr-only">Главная</span></a>
                        </li>
                        <li>
                            <a href="#">Комплектующие</a>
                        </li>
                        <li>
                            <a href="#">Процессы</a>
                        </li>
                        <li class="active">
                            <a href="#">Intel</a>
                        </li>
                    </ol>
                </div>

            <header>
                <h2>
                    <strong>{{$post->title}}</strong>
                </h2>

                <div>
                    {{--todo сделать вывод кол-ва комментариев к посту--}}
                    <div class="icon fa-calendar f60em spacediv">
                        {{currentDate($post->created_at)}}
                    </div>
                    <div class="icon fa-eye f60em spacediv"> {{ $post->viewed }} </div>
                    <div class="icon fa-comments f60em spacediv">2 </div>
                </div>
            </header>
            <div class="hr1"></div>

            <div class="row">
                <img src="images/pic0{{$post->id}}.jpg" alt="" />
                {{$post->content}}
            </div>

            <div class="">
                Автор статьи
            </div>

            <div class="hr1"></div>

            <div class="row">
                <p><b>Коментарии</b></p>
            </div>
        </div>
    </section>
@endsection