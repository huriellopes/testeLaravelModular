<?php

Route::group(['middleware' => 'web', 'prefix' => 'blog', 'namespace' => 'HDev\Blog\Http\Controllers'], function()
{
    Route::get('/', 'PostsController@index');
});
