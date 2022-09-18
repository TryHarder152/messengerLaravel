<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UploadAvatarController extends Controller
{
    public function index(Request $request, $username) {

       $user = User::where('name', $username)->first();
       if($request->hasFile('avatar'))
       {
            $user->clearAvatars($user->id);

            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();

            $avatar->save(public_path($user->getAvatarsPath($user->id)) . $fileName);

            $user = Auth::user();
            $user->avatar = $fileName;
            $user->save();
       }

        return redirect()->back();
    }
}
