<?php

namespace App\Http\Controllers\Client;

use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\MessageBag;

class MailController extends Controller
{
    public function sent(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:50|min:3',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        //TODO: сделать jquery чтоб при отправке сообщения страница не перезагружалась

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        $posts = Post::all()
            ->sortByDesc('created_at');

        return view('client.pages.section', [
            'title' => 'Главная страница',
            'posts' => $posts,
            'mess' => 1,
        ]);
    }
}
