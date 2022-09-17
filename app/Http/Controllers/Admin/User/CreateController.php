<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;

class CreateController extends BaseController {
    public function __invoke() {

        $template = 'admin';

        $roles = User::getRoles();

        return view('admin.users.create', compact('template', 'roles'));
    }
}
