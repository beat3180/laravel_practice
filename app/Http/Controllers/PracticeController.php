<?php

namespace App\Http\Controllers;

//Practiceモデルを継承
use App\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index(Request $request)
    {

        $items = Practice::all();
        return view('practice.index',['items' => $items]);
    }
}
