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

    public function find(Request $request)
    {
        return view('practice.find',['input' => '']);
    }

     public function search(Request $request)
    {
        //IDによる検索
        //$item = Practice::find($request->input);
        //nameによる検索
        //$item = Practice::where('name', $request->input)->first();
        //スコープによるname検索
        //$item = Practice::nameEqual($request->input)->first();
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Practice::ageGreater($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('practice.find',$param);
    }



}
