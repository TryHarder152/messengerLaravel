<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChatController extends Controller {

    public function __invoke($id) {

        $template = 'messenger';
        $userAuth = auth::User();
        $userChat = User::where(['id' => $id])->first();
        $users = User::get();
        return view('main.index', compact('template',  'userChat', 'userAuth', 'users'));
    }
}
