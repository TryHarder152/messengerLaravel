<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class LoginController extends Controller {

    public function __invoke() {
        return view('admin.login');
    }
}
