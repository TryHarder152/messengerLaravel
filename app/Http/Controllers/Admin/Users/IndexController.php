<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller {
    public function __invoke() {

        $template = 'admin';

        $users = User::all();

        return view('admin.users.index', compact('template', 'users'));
    }
}
