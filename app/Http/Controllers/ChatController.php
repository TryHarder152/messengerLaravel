<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ChatController extends Controller
{
    public function index(){
        auth()->loginUsingId(id:1);
        $template = 'messenger';

        return view('main.index', compact('template'));
    }
    public function messages(){
        return Message::query()
            ->with('user')
            ->get();
    }
    public function send(MessageFormRequest $request){
        $message = $request->user()
            ->messages()
            ->create($request->validated());
        broadcast(new MessageSend($request->user(), $message));
        return $message;
    }
    
}
