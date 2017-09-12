<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /*
     * Index page my site
     * mees - message for send mail
     * */
    public function index()
    {
        return view('client.pages.section', [
            'title' => 'Главная страница',
            'mess' => 0,
        ]);
    }

    /*
     * Page my blog
     * */
    public function blog()
    {
        return view('client.pages.sheets.blogPage', [
            'title' => 'Блог',
        ]);
    }

}
