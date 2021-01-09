<?php

use Illuminate\Database\Seeder;
//Restdataモデルを継承
use App\Restdata;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'message' => 'Google Japan',
            'url' => 'http://www.google.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Yahoo Japan',
            'url' => 'https://www.yahoo.co.jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Msn Japan',
            'url' => 'http://www.msn.co/ja-jp',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

    }
}
