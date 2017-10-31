@extends('admin.layouts.dashboard')

@section('content')
    <div class="content-wrapper">
    <div class="row">
        <div class="card">
            <h3 class="card-title">Новое сообщение</h3>
            <form action="{{ route('site.mailout.sent') }}" method="post">
                    {{ csrf_field() }}
                <input type="hidden" name="message_id" value="{{ $message->id }}">
                <div class="card-body">
                <div class="form-group">
                    <label class="control-label">Имя</label>
                    <input class="form-control" type="text" name="name" placeholder="Имя"
                           readonly value="{{ $message->name }}">
                </div>
                <div class="form-group">
                    <label class="control-label">Почтовый ящик</label>
                    <input class="form-control" type="email" name="email" placeholder="Email"
                           readonly value="{{ $message->email }}">
                </div>
                <div class="form-group">
                    <label class="control-label">Тема письма</label>
                    <input class="form-control" type="text" name="title"
                           placeholder="Тема письма" readonly value="RE: {{ $message->title }}">
                </div>
                <div class="form-group">
                    <label class="control-label">Текст</label>
                    <textarea class="form-control" rows="6" name="message" placeholder="Текст сообщения">
                        >> {{ $message->name }}  {{ $message->email }}
                        >> {{ $message->created_at }}
                        >> {{ $message->message }}
                    </textarea>
                </div>
                {{--<div class="form-group">
                    <label class="control-label">Identity Proof</label>
                    <input class="form-control" type="file">
                </div>--}}
                </div>
                <div class="card-footer">

                    {{--<button class="btn btn-primary icon-btn" type="button">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Отправить
                    </button>--}}
                    <input class="btn btn-primary icon-btn"
                           type="submit" value="Отправить" />
                    &nbsp;&nbsp;
                    <a class="btn btn-default icon-btn" href="#">
                        <i class="fa fa-fw fa-lg fa-times-circle"></i>Отмена
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection