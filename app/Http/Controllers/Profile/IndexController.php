<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class IndexController extends Controller {

    public function __invoke() {

        $template = 'profile';
       
        
        return view('profile.index', compact('template'));
    }
    public function ava(Request $request, $userName){
        $template = 'profile';
        $user = User::where('name', $userName)->first();
        if($request->hasFile('avatar'))
        {
            $user->clearAvatars($user->id);

            $avatar = $request->file('avatar');
           // $fileName = ;

            $path = $avatar->store('images', 'public');

            $user = Auth::user();
            $user->avatar = $path;
            $user->save();
        }

      
        return view('profile.index', compact('template', 'user','path'));
    }
}
