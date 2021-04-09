<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    //
    protected $guarded = [];

    public function cbos()
    {
        # code...

        return $this->belongsTo('App\Cbo');
    }
}
