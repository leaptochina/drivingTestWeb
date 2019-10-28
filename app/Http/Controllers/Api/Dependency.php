<?php

namespace App\Http\Controllers\Api;

use Google\Cloud\Translate\TranslateClient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Dependency extends Controller
{



    //即将弃用 1.0.2版本    
    public function show($questionId)    {
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


    //1.0.2弃用
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


}