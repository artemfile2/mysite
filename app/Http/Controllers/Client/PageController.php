<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PageController extends Controller
{
    /*
     * Index page my site
     * mees - message for send mail
     * */
    public function index()
    {

        $posts = Post::all()
            ->sortByDesc('created_at')
            ->take(6);

        return view('client.pages.section', [
            'title' => 'Главная страница',
            'posts' => $posts,
            'mess' => 0,
        ]);
    }

    /*
     * Page my blog
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function blog()
    {
        $posts = Post::paginate(3);

        return view('client.pages.sheets.blogPage', [
            'title' => 'Блог',
            'posts' => $posts,
        ]);
    }

}
