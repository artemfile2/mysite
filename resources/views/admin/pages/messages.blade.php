@extends('admin.layouts.dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1>Сообщения</h1>
                <ul class="breadcrumb side">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li>Tables</li>
                    <li class="active"><a href="#">Data Table</a></li>
                </ul>
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
                                <th>Имя отправителя</th>
                                <th>Почтовый ящик отправителя</th>
                                <th>Заголовок</th>
                                <th>Текст письма</th>
                                <th>Полученно</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->title }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>{{ $message->created_at }}</td>
                                    <td class="control">
                                        <a class="btn btn-primary btn-flat" href="#" title="Редактировать">
                                            <i class="fa fa-lg fa-edit"></i>
                                        </a>
                                        <a class="btn btn-warning btn-flat" href="#" title="Переместить в корзину">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </a>
                                    </td>
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