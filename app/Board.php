<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'practice_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

    public function practice()
    {
        return $this->belongsTo('App\Practice');
    }

     public function getData()
    {
        return $this->id . ':' . $this->title . '(' . $this->practice->name . ')';
    }


}
