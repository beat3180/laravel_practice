<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Samplecontroller extends Controller
{
    public function sample_action(){
        $title = 'モデルとコントローラー';
        $messages = \App\Message::find(5);
        return view('sample',[
            'title' => $title,
            'messages' => $messages,
        ]);

    }

public function blade_example(){
        $title = 'bladeテンプレートの様々な機能';
        $num = 10;
        $messages = \App\Message::all();
        return view('blade_example',[
            'title' => $title,
            'num' => $num,
            'messages' => $messages,
        ]);
    }

}
