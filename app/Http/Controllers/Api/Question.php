<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Question extends Controller
{
    public function configs(){
        //顺序练习数组
        $orders = \App\QuestionList::get(['id']);
        $ordersArray = array();
        foreach($orders as $order){
            array_push($ordersArray, $order -> id);
        }

        //常错题数组
        $mostError = \App\QuestionList::orderBy("accuracy_err_rate", 'desc') -> limit(5) -> get(['id']);
        $mostErrorArray = array();
        foreach($mostError as $error){
            array_push($mostErrorArray, $error -> id);
        }
        

        $r = [
            'orderExercise' => $ordersArray,
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

    public function saveMyAnswer($question_list_id, $is_correct){

        $questionList =  \App\QuestionList::find($question_list_id);
        if ($questionList == null){
            return;
        }
        $questionList -> accuracy_total += 1;
        if (!$is_correct){
            $questionList -> accuracy_err += 1;
        }
        

        $questionList -> accuracy_err_rate = $questionList -> accuracy_err * 100 / $questionList -> accuracy_total;
        $questionList -> save();


        return $questionList;
    }

}
