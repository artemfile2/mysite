<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('client.pages.section', [
            'title' => 'Главная страница',
            'mess' => 0,
        ]);
    }

    public function blog()
    {
        return view('client.pages.sheets.blogPage', [
            'title' => 'Блог',
        ]);
    }

}
