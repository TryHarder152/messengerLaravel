<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class AvaController extends Controller {

    public function __invoke(Request $request) {

       if ($request->has('input__file')) {
            $avatar = $request->file('input__file');
            $path = $avatar->store('images', 'public');

            $user = Auth::user();
            $user->avatar = $path;
            $user->save();
        }
        else{
            return redirect()->route('profile.index')->with('error', 'Файл не выбран!')->withInput();
        }

        return Redirect::back();
    }
}
