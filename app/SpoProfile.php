<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpoProfile extends Model
{
    //

    protected $guarded = [];

    public function reports()
    {
        # code...

        return $this->hasMany('App\SpoMonthlyReport', 'spo_id', 'id');
    }
}
