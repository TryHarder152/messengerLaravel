<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;


Auth::routes();

Route::middleware(['auth'])->group(function() {

    Route::get('/home', 'HomeController@index');

    Route::group(['namespace' => 'Main'], function() {
        Route::get('/', 'IndexController')->name('main.index');
        Route::get('/chat/{id}', 'ChatController', function($id){
            return $id;
        })->name('main.chat');
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

// Route::controller(ChatController::class)->group(function(){
//     Route::get('/',  'index');
//     Route::get('/messages', 'messages');
//     Route::post('/send', 'send');
// });


