<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cbo extends Model
{
    //
    protected $guarded = [];

    public function cats()
    {
        # code...

        return $this->hasMany('App\Cat', 'cbo_id', 'id');
    }

    public function reports()
    {
        # code...

        return $this->hasMany('App\CboMonthlyReport', 'cbo_id', 'id');
    }

    
}
