<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientExitQuestionaire extends Model
{
    //
        //
        protected $guarded = [];

        public function client_exits()
        {
            
            return $this->belongsTo('App\QuestionBank');
        }
}
