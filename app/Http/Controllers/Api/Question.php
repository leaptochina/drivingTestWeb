<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Question extends Controller
{
    public function configs(){
        $mostError = \App\QuestionList::orderBy("accuracy_err_rate", 'desc') -> limit(50) -> get(['id']);
        $mostErrorArray = array();
        foreach($mostError as $error){
            array_push($mostErrorArray, $error -> id);
        }
        

        $r = [
            'questionTotalCount' => \App\QuestionList::count(),
            'languageList' => \App\Language::all(),
            'mostError' => $mostErrorArray,
        ];
        return $r;
    }

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

        $questionList -> load([
            'questions', 
            'explains' => function ($query) {
                $query->orderBy('like', 'desc');
            }
        ]);

        foreach($questionList -> explains as $explain){
            $explain -> load('user');
        }

        return $questionList;
    }

    

}
