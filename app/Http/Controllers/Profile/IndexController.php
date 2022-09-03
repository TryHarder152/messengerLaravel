<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller {

    public function __invoke() {

        $template = 'profile';

        return view('profile.index', compact('template'));
    }
}
