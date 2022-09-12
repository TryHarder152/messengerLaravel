<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends BaseController {
    public function __invoke() {

        $template = 'admin';

        return view('admin.users.create', compact('template'));
    }
}
