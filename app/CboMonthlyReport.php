<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CboMonthlyReport extends Model
{
    //
    protected $guarded = [];


    public function cbos()
    {
        return $this->belongsTo('App\Cbo');
    }
}
