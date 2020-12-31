<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function inde(Request $req)
    {
        $title = 'シンプルな掲示板';
        $msg = 'お名前を入力してください';


        // views/messages/index.blade.phpを指定
        return view('inde',[
            'title' => $title,
            'msg' => $msg,
        ]);
    }

    public function result(Request $req)
    {
        $title = 'シンプルな掲示板';
        $message = $req->message;

        // views/messages/index.blade.phpを指定
        return view('inde',[
            'title' => $title,
            'msg'=>'こんにちは、' . $message . 'さん！',
        ]);
    }

    public function index()
    {
        // views/messages/index.blade.phpを指定
        return view('index',['message'=>'Hello!']);
    }
}
