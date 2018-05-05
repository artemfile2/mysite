<?php

Route::group(['namespace' => 'Client'], function (){

    Route::get('/','PageController@index')
        ->name('site.page.index');

    Route::post('/', 'MailController@sent')
        ->name('site.mail.sent');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'PageController@blog')
            ->name('site.page.blog');

        Route::get('/news/{id}', 'PageController@newsOne')
            ->name('site.page.blogOne');
    });
});

Route::group(['namespace' => 'Admin',
              'prefix' => 'dashboardpage',
              'middleware'=>'auth'], function (){

    Route::get('/','AdminController@index')
        ->name('site.admin.index');

    Route::get('/posts','AdminController@listPosts')
        ->name('site.admin.listPosts');

    Route::get('/post/add','ModifyPostController@Add')
        ->name('site.admin.post.add');

    Route::get('/messages','AdminController@messages')
        ->name('site.admin.messages');
});

Auth::routes();