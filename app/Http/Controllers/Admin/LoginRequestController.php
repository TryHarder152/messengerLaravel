<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Validators\LoginValidator;

class LoginRequestController extends Controller {

    public function __invoke(Request $request) {
        $validator = LoginValidator::logoutValidator($request);

        if($validator->fails()) {
            return redirect()->route('login');
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin.index');
        }
        else{
            return redirect()->route('admin.login');
        }
    }
}
