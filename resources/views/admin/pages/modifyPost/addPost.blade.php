@extends('admin.layouts.dashboard')

@section('content')

    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1>Посты</h1>
                <ul class="breadcrumb side">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li><a href="{{route('site.admin.index')}}">Панель инструментов</a></li>
                    <li><a href="{{route('site.admin.listPosts')}}">Посты</a></li>
                    <li class="active">Новый пост</li>
                </ul>
            </div>
            <div>
                <a class="btn btn-primary btn-flat" href="#">
                    <i class="fa fa-lg fa-plus"></i>
                </a>
                <a class="btn btn-info btn-flat" href="#">
                    <i class="fa fa-lg fa-refresh"></i>
                </a>
                <a class="btn btn-warning btn-flat" href="#">
                    <i class="fa fa-lg fa-trash"></i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Заголовок поста *</label>
                            <input class="form-control" id="name"
                                   placeholder="Введите заголовок поста" type="text"
                                   name="title" value="{{ old('title') }}">
                            {{--@if ($errors->has('title'))
                                <div class="alert alert-danger alert-dismissibler margin-top">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif--}}
                            {{$user}}
                        </div>
                        <div class="form-group">
                            <label for="image">Изображение</label>
                            <img class="img-responsive margin-bottom" src="{{ asset('/image/widen/400/default.jpg') }}" alt="">
                            <input id="image" type="file" name="image">
                            @if ($errors->has('image'))
                                <div class="alert alert-danger alert-dismissibler margin-top">{{ $errors->first('image') }}</div>
                            @endif
                            <a class="btn btn-primary" href="#tab_3" data-toggle="tab">Редактировать</a>
                        </div>
                        <div class="form-group">
                            <label for="description">Текст поста</label>
                            <textarea class="form-control" id="description"
                                      rows="12" placeholder="Введите текст поста"
                                      name="description">{{ old('description') }}
                            </textarea>
                            @if ($errors->has('description'))
                                <div class="alert alert-danger alert-dismissibler margin-top">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="row">
                                {{--@foreach($categories as $category)--}}
                                    <div class="form-group col-sm-6 col-lg-4">
                                        <input type="checkbox" value="" name="category" id="checkbox">
                                        <label for="checkbox">Опубликовать</label>
                                    </div>
                            </div>
                            {{--@if ($errors->has('category_id'))
                                <div class="alert alert-danger alert-dismissibler margin-top">{{ $errors->first('category_id') }}</div>
                            @endif--}}
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-success margin-r-5" value="Сохранить">
                            <a href="" class="btn btn-primary">Назад</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection