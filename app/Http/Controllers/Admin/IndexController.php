<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller {

    public function __invoke() {

        $template = 'admin';
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        return view('admin.index', compact('template'));
    }
}
