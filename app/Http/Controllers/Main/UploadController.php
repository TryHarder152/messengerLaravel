<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller {

    public function __invoke(Request $request) {

        $template = 'messenger';

        $path = $request->file('input__file')->store('images', 'public');
        
     
       return view('main.index', compact('template', 'path'));
    }
}