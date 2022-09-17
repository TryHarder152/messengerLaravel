<?php
	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;
	use App\Models\User;


	class ChatServiceProvider extends ServiceProvider{
		public function boot($id){
	        View::composer('main/index', function ($view) {
	        	$userChat = User::where(['id' => $id])->first();
	        	$view->with('widgetChat', view('providers.chat ', compact('userChat')));
	        });
	    }
	}