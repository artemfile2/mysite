@extends('admin.layouts.dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1>Письма</h1>
                <ul class="breadcrumb side">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li class="active"><a href="{{route('site.admin.index')}}">Панель инструментов</a></li>
                    <li>Письма</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><a class="mb-20 btn btn-primary btn-block" href="">Письма</a>
                <div class="card p-0">
                    <h4 class="card-title folder-head">Папки</h4>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active">
                                <a href="#">
                                    <i class="fa fa-inbox fa-fw"></i> Входящие
                                    <span class="label label-primary pull-right">{{ count($messages) }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope-o fa-fw"></i> Отправленные
                                    <span class="label label-primary pull-right">{{ count($message_outs) }}</span>
                                </a>
                            </li>
                            <li><a href="#"><i class="fa fa-file-text-o fa-fw"></i> Черновики</a></li>
                            <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Корзина</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="mailbox-controls">
                        <div class="animated-checkbox">
                            <label>
                                <input type="checkbox"><span class="label-text"></span>
                            </label>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-primary btn-sm" type="button">
                                <i class="fa fa-trash-o"></i>
                            </button>
                            <button class="btn btn-primary btn-sm" type="button">
                                <i class="fa fa-reply"></i>
                            </button>
                            <button class="btn btn-primary btn-sm" type="button">
                                <i class="fa fa-share"></i>
                            </button>
                            <button class="btn btn-primary btn-sm" type="button">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя отправителя</th>
                                <th>Тема письма</th>
                                <th>Ответ</th>
                                <th>Полученно</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                            <tr>
                                <td>
                                    <div class="animated-checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span class="label-text"> </span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">{{ $message->name }}</a>
                                </td>
                                <td class="mail-subject">
                                    <b>{{ $message->title }}</b>
                                </td>
                                <td>
                                    @if ($message->response === 1)
                                        <i class="fa fa-lg fa-check-square"></i>
                                    @else
                                        <i class="fa fa-lg fa-square-o"></i>
                                    @endif
                                </td>
                                <td>
                                    {{ $message->created_at }}
                                </td>
                                <td class="control">
                                    <a class="btn btn-primary btn-flat"
                                       href="{{ route('site.admin.messageEdit', $message->id) }}"
                                       title="Редактировать">
                                        <i class="fa fa-lg fa-edit"></i>
                                    </a>
                                    <a class="btn btn-warning btn-flat"
                                       href="#"
                                       title="Переместить в корзину">
                                        <i class="fa fa-lg fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right semibold-text">
                        <span class="text-muted mr-10">Showing 1-15 out of 60</span>
                        <div class="btn-group">
                            <button class="btn btn-primary btn-sm" type="button">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="btn btn-primary btn-sm" type="button">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection