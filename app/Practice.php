<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
//ScopePracticeクラスを継承する
use App\Scopes\ScopePractice;


class Practice extends Model
{

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

     public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }

    //スコープ使用
    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    //スコープ使用
    public function scopeAgeGreater($query, $n)
    {
        return $query->where('age','>=', $n);
    }

    //スコープ使用
    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age','<=', $n);
    }


    public static function boot()
    {
        parent::boot();

        //Scopepracticeをグローバルスコープで適用
        static::addGlobalScope(new Scopepractice);
        //グローバルスコープの条件を作って適用
        /*static::addGlobalScope('age', function (Builder $builder){
            $builder->where('age', '>' , 20);
        });*/

    }

}
