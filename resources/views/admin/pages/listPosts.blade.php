@extends('admin.layouts.dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1>Посты</h1>
                <ul class="breadcrumb side">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li class="active"><a href="{{route('site.admin.index')}}">Панель инструментов</a></li>
                    <li>Посты</li>
                </ul>
            </div>
            <div>
                <a class="btn btn-primary btn-flat" href="{{route('site.admin.post.add')}}">
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
                    <div class="card-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Картинка</th>
                                <th>Заголовок</th>
                                <th>Пользователь</th>
                                <th>Просмотров</th>
                                <th>Коментариев</th>
                                <th>Опубликованно</th>
                                <th>Созданно</th>
                                <th>Удаленно</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->image }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user_id }}</td>
                                <td>{{ $post->viewed }}</td>
                                <td>{{ $post->comments }}</td>
                                <td>{{ $post->published }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->deleted_at }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection