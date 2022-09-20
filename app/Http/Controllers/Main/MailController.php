<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller {

    public function __invoke() {
        $userAuth = Auth::user();
        $userMail = $userAuth->email;
        
        Mail::to($userMail)->send(new SendMail());
        return Redirect::back();
       
    }
}