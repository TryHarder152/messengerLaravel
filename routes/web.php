<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware(['auth'])->group(function() {

    Route::get('/home', 'HomeController@index');

    Route::group(['namespace' => 'Main'], function() {
        Route::get('/', 'IndexController', )->name('main.index');
        Route::post('/file/upload', 'UploadController')->name('main.upload');
        Route::get('/chat/{id}','indexController@showChat', function($id){
            return $id;
        });
    });

    Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function() {
        Route::get('/', 'IndexController')->name('profile.index');
    });

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {

        route::get('/', 'IndexController')->name('admin.index');

        Route::group(['namespace' => 'User', 'prefix' => 'users'], function() {
            Route::get('/', 'IndexController')->name('admin.users.index');
            Route::get('/create', 'CreateController')->name('admin.users.create');
            Route::post('/create', 'StoreController')->name('admin.users.store');
            Route::get('/{user}', 'ShowController')->name('admin.users.show');
            Route::get('/{user}/edit', 'EditController')->name('admin.users.edit');
            Route::patch('/{user}', 'UpdateController')->name('admin.users.update');
            Route::delete('/{user}', 'DestroyController')->name('admin.users.destroy');
        });

    });
});


