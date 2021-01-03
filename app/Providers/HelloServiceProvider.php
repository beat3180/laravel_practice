<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //ビューコンポーザー
         /*View::composer(
            'index',function($view){
                $view->with('view_message','compose message!');
            }
        );*/
        //バリデータクラスの生成。ValidatorHelloを通して設定。汎用性があり、複数のコントローラーで使える
        /*$validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rulus, $messages){
            return new HelloValidator($translator, $data, $rulus, $messages);
        });*/
        //エクステンドを使ったバリデータ。ValidatorHelloは通さずに独立している、汎用性がなく一つのコントローラーでしか使えない
        Validator::extend('hello', function($attorivute,$value,$parameters,$validator)
        {
            return $value % 2 == 0;

        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
