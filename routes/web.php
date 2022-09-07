<?php

use Illuminate\Support\Facades\Route;




Route::group(['namespace' => 'Main'], function() {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function() {
    Route::get('/', 'IndexController')->name('profile.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    route::get('/', 'IndexController')->name('admin.index');
});


