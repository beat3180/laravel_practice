<?php

namespace App\Http\Controllers;
//モデルクラスを継承
use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request)
    {

        //$items = Board::all();
        //withを使ってboardを取得する
        $items = Board::with('practice')->get();
        return view('board.index',['items' => $items]);
    }

    public function add(Request $request)
    {

        return view('board.add');
    }

    public function create(Request $request)
    {
        //モデルにあるバリデータを呼び出す
        $this->validate($request, Board::$rules);
        //インスタンスの作成
        $practice = new Board;
        //保存する値を取得
        $form = $request->all();
        //CSRF対策のトークンだけ削除
        unset($form['_token']);
        //インスタンスに値を設定して保存
        $practice->fill($form)->save();
        return redirect('/board/index');
    }
}
