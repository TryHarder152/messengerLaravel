<?php

use Illuminate\Support\Facades\Route;




Route::group(['namespace' => 'Main'], function() {
    Route::get('/', 'IndexController')->name('main.index');
    Route::post('/file/upload', 'UploadController')->name('main.upload');
});

Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function() {
    Route::get('/', 'IndexController')->name('profile.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'IndexController')->name('admin.index');
    Route::get('/login', 'LoginController')->name('admin.login');
    Route::post('/request', 'LoginRequestController');
    Route::get('/logout', 'LogoutController');
});


