<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    //
    protected $guarded = [];

    public function client_exits()
    {
        
        return $this->hasMany('App\ClientExitQuestionaire', 'question_id', 'id');
    }
}
