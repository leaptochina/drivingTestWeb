<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Explain extends Controller
{
    
    
    public function store(Request $request)
    {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=D:\Me\Web\drivingTest\google_key.json');
        $translate = new TranslateClient();


        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> take(1) -> get();
        if (sizeof($existedUser) == 0){
            return ;
        }
        $existedUser = $existedUser[0];

        if ($request -> id > 0){
            $explain = \App\Explain::find($request -> id);
        }
        else{
            $explain = new \App\Explain;
            $explain -> like = 0;
        }
        $explain -> question_list_id = $request -> question_list_id;
        $explain -> user_id = $existedUser -> id;
        $explain -> explain_en = $translate->translate($request->explain, [
            'target' => 'en',
        ]);
        $explain -> explain_zh = $translate->translate($request->explain, [
            'target' => 'zh',
        ]);

        $explain -> save();
        



        $questionController = new \App\Http\Controllers\Api\Question;
        return $questionController -> show($request -> question_list_id);
    }
    public function update(Request $request)
    {
        
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> take(1) -> get();
    
        if (sizeof($existedUser) == 0){
            return ;
        }
        $existedUser = $existedUser[0];

        $existExplain =  \App\Explain::where('id', $request -> explain_id) -> take(1) -> get()[0];

        $existZan =  \App\UserExplainAgree::where('user_id', $existedUser['id']) -> where('explain_id', $request -> explain_id) -> take(1) -> get();
        
        if (sizeof($existZan) == 0){
            $existZan = new \App\UserExplainAgree;
            $existZan -> user_id = $existedUser -> id;
            $existZan -> explain_id = $request -> explain_id;
            $existZan -> is_agree = 0;
        }
        else{
            $existZan = $existZan[0];
        }
        
        $existExplain -> like -= $existZan -> is_agree;
        $existExplain -> like += $request -> is_agree;
        $existExplain -> save();


        $existZan -> is_agree = $request -> is_agree;
        $existZan -> save();
        
        $questionList = $existExplain -> questionList;
        $questionController = new \App\Http\Controllers\Api\Question;
  
        return $questionController -> show($questionList -> id);
    }

    

}
