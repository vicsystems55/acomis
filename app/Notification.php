<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    public function users()
    {
        # code...
        return $this->belongsTo('App\User', 'user_id');
    }
}
