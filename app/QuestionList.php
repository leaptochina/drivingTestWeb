<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionList extends Model
{
    use SoftDeletes;
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function explains()
    {
        return $this->hasMany('App\Explain');
    }
}
