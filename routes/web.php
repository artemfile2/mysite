<?php

Route::group(['namespace' => 'Client'], function (){

    Route::get('/','PageController@index')
        ->name('site.page.index');

    Route::post('/', 'MailController@sent')
        ->name('site.mail.sent');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'PageController@blog')
            ->name('site.page.blog');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');
