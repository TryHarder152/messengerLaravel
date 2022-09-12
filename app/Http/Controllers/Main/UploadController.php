<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Validators\FileValidator;

class UploadController extends Controller {

    public function __invoke(Request $request) {

        $template = 'messenger';

        if ($request->has('input__file')) {
            $path = $request->file('input__file')->store('images', 'public');
        }
        else{
            return redirect()->route('main.index')->with('error', 'Файл не выбран!')->withInput();
        }

     
       return view('main.index', compact('template', 'path'));
    }
}