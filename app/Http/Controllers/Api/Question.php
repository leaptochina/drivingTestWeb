<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Question extends Controller
{
    public function all()
    {
        $configs =  \App\Config::all();
        $questionLists = \App\QuestionList::all();

        $questionLists -> load('questions', 'explains');


        $r = [
            'configs' => $configs,
            'questionLists' => $questionLists,
        ];

        return $r;
    }

    public function show($questionId)
    {
        $questionList =  \App\QuestionList::find($questionId);

        $questionList -> load('questions', 'explains');

        return $questionList;
    }
}
