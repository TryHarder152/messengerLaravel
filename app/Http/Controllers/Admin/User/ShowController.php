<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ShowController extends Controller {
    public function __invoke(User $user) {
        $template = 'admin';

        return view('admin.users.show', compact('template', 'user'));
    }
}
