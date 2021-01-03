<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//Myruleを継承する
use App\Rules\Myrule;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //パスでフォームリクエストの利用を判断する。パスが一致すればフォームリクエストを使える
        if($this->path() == 'practice')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //検証するバリデーションを設定する
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            //'age' => 'numeric|hello',  作成したhelloルールを使用する
            //newを使ってMyruleクラスを使用する
            'age' => ['numeric', new Myrule(5)],
        ];
    }

    //表示するメッセージを設定する
    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください',
            'mail.email' => 'メールアドレスが必要です',
            'age.numeric' => '年齢を整数で記入ください',
            'age.hello' => 'Hello! 入力は偶数のみ受け付けます。',
        ];
    }
}
