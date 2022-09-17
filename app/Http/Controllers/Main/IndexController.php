<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class IndexController extends Controller {

    public function __invoke($id) {

        $template = 'messenger';
        $userAuth = auth::User();
        $users = User::get();
        $userChat = User::where(['id' => $id])->first();
        return view('main.index', compact('template', "userAuth", 'users', 'userChat'));
    }
}
