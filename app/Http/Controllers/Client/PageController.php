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
        $posts = Post::with('user')
            ->orderByDesc('created_at')
            ->paginate(5);

        return view('client.pages.sheets.blogAllPage', [
            'title' => 'Блог',
            'posts' => $posts,
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newsOne($id){
        $post = Post::find($id);

        $post->viewed++;
        $post->save();

        return view('client.pages.sheets.blogContent', [
            'post' => $post,
        ]);
    }

}
