<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Validators\FileValidator;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class UploadController extends Controller {

    public function __invoke(Request $request) {

        $template = 'messenger';
        $userAuth = Auth::user();
        $users = User::get();
       
        if ($request->has('input__file')) {
            $path = $request->file('input__file')->store('images', 'public');
            $file = $request->file('input__file')->getClientOriginalExtension();
        }
        else{
            return redirect()->route('main.index')->with('error', 'Файл не выбран!')->withInput();
        }

     
       return view('main.index', compact('template', 'path', 'file', 'userAuth', 'users'));
       
    }
}