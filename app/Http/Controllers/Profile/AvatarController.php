<?php

namespace App\Http\Controllers\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AvatarController extends Controller
{
    public function index(Request $request, $userName){
        dd($userName);
    }
}
