<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends BaseController {
    public function __invoke() {
        $template = 'admin';

        $users = User::all();

        return view('admin.users.index', compact('template', 'users'));
    }
}
