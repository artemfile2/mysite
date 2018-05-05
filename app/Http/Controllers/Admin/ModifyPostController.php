<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModifyPostController extends Controller
{
    public function Add(){
        return view('admin.pages.modifyPost.addPost', [
            'user' => 'test 123',
        ]);
    }
}
