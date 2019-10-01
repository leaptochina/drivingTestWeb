<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionList extends Model
{
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function explains()
    {
        return $this->hasMany('App\Explain');
    }
}
