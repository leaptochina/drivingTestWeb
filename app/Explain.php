<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explain extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function questionList()
    {
        return $this->belongsTo('App\QuestionList');
    }
}
