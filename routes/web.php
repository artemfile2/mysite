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

Route::group(['namespace' => 'Admin',
              'prefix' => 'dashboardpage',
              'middleware'=>'auth'], function (){

    Route::get('/','AdminController@index')
        ->name('site.admin.index');
});

Auth::routes();