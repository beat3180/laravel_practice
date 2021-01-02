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
         /*View::composer(
            'index',function($view){
                $view->with('view_message','compose message!');
            }
        );*/
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rulus, $messages){
            return new HelloValidator($translator, $data, $rulus, $messages);
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
