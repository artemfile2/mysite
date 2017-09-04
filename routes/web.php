<?php

Route::group(['namespace' => 'Client'], function (){

    Route::get('/','PageController@index')
        ->name('site.page.index');

    Route::post('/', 'MailController@sent')
        ->name('site.mail.sent');

});