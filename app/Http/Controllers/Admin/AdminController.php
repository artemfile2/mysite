<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.pages.indexPanel', [
            'user' => Auth::user(),
        ]);
    }

    public function listPosts(){
        $posts = Post::all();

        return view('admin.pages.listPosts',[
            'posts' => $posts,
        ]);
    }

    public function messages(){

        $messages = Message::all();

        return view('admin.pages.messages', [
            'messages' => $messages,
        ]);
    }
}
