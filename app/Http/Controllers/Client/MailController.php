<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MailController extends Controller
{
    public function sent(Request $request)
    {
        dump($request);

        //TODO: сделать валидацию формы отправки сообшщения

        //TODO: ошибки валидации прицепить в полям

        //TODO: сделать миграцию таблицы хранения отправленных сообщений

        return 'ok';
    }
}
