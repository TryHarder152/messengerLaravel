<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvaController extends Controller {

    public function __invoke(Request $request) {

       if ($request->has('input__file')) {
            $path = $request->file('input__file')->store('images', 'public');
        }
        else{
            return redirect()->route('profile.index')->with('error', 'Файл не выбран!')->withInput();
        }

        return view('profile.index', compact('template', 'userAuth', 'path'));
    }
}
