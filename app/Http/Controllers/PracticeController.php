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

     public function add(Request $request)
    {

        return view('practice.add');
    }

    public function create(Request $request)
    {
        //モデルにあるバリデータを呼び出す
        $this->validate($request, Practice::$rules);
        //インスタンスの作成
        $practice = new Practice;
        //保存する値を取得
        $form = $request->all();
        //CSRF対策のトークンだけ削除
        unset($form['_token']);
        //インスタンスに値を設定して保存
        $practice->fill($form)->save();
        return redirect('/practice/index');
    }

     public function edit(Request $request)
    {
        $practice = Practice::find($request->id);
        return view('practice.edit',['form' => $practice]);
    }

    public function update(Request $request)
    {
        //モデルにあるバリデータを呼び出す
        $this->validate($request, Practice::$rules);
        //idを取得してインスタンスを作成する
        $practice = Practice::find($request->id);
        //保存する値を取得
        $form = $request->all();
        //CSRF対策のトークンだけ削除
        unset($form['_token']);
        //インスタンスに値を設定して保存
        $practice->fill($form)->save();
        return redirect('/practice/index');
    }




}
