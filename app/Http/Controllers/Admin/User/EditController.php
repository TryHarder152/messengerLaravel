<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller {
    public function __invoke(User $user) {
        $template = 'admin';

        $roles = User::getRoles();

        return view('admin.users.edit', compact('template', 'user', 'roles'));
    }
}
