<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//フォームリクエストクラスを継承する
use App\Http\Requests\HelloRequest;
//バリデータクラスを継承する
use Validator;
//DBクラスを継承する
use Illuminate\Support\Facades\DB;

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

    public function index(Request $request)
    {
        // views/messages/index.blade.phpを指定
    return view('index'/*,['data'=>$request->data]*/);
    }

    public function practice(Request $request)
    {
        $validator = Validator::make($request->query(),[
            'id' => 'required',
            'pass' =>'required',
        ]);
        if ($validator->fails()){
            $msg = 'クエリーに問題があります。';
        } else {
            $msg = 'ID/PASSを受け付けました。フォームを入力ください。';
        }
        return view('practice', ['msg' => $msg, ]);

    }

    //フォームリクエストを使用
    public function post(HelloRequest $request)
    {
        //バリデーションをリクエストから取り出して使用
        /*$validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $this->validate($request, $validate_rule);*/
        return view('practice', ['msg' => '正しく入力されました!']);
    }

    //バリデータをこの場で生成して使用。sametimesを使ってバリデータを分岐させる
    /*public function post(Request $request)
    {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric',
        ];

        $messages = [
            'name.required' => '名前は必ず入力してください',
            'mail.email' => 'メールアドレスが必要です',
            'age.numeric' => '年齢を整数で記入ください',
            'age.min' => '年齢はゼロ歳以上で入力ください',
            'age.max' => '年齢は200歳以下で入力ください',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        $validator->sometimes('age', 'min:0',function($input){
            return !is_int($input->age);
        });
        $validator->sometimes('age', 'max:200',function($input){
            return !is_int($input->age);
        });
        if ($validator->fails()) {
            return redirect('/practice')
                    //エラーメッセージを付与してリダイレクトする
                    ->withErrors($validator)
                    //送られてきたフォームの値をそのまま付与してリダイレクト
                    ->withInput();
        }

        return view('practice', ['msg' => '正しく入力されました!']);
    }*/

    public function DB(Request $request)
    {
        $items = DB::select('select * from people');
        return view('DB',['items' => $items]);
    }

}
