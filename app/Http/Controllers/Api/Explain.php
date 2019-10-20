<?php

namespace App\Http\Controllers\Api;

use Google\Cloud\Translate\TranslateClient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Explain extends Controller
{
    
    
    public function store(Request $request)
    {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . config('app.APP_ENV_TRANSLATE'));
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
        $explain -> explain_en = $request->explain_en;
        $explain -> explain_zh = $request->explain_zh;

        if ($explain -> explain_en == ""){
            $explain -> explain_en = $translate->translate($request->explain_zh, [
                'target' => 'en',
            ])['text'];
            $explain -> explain_en = str_replace('&#39;', "`", $explain -> explain_en);
        }

        if ($explain -> explain_zh == ""){
            $explain -> explain_zh = $translate->translate($request->explain_en, [
                'target' => 'zh',
            ])['text'];
        }



        $explain -> save();
        

        return $this -> showQuestion($request -> question_list_id);

    }

    public function update(Request $request)
    {
        
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> take(1) -> get();
    
        if (sizeof($existedUser) == 0){
            return ;
        }
        $existedUser = $existedUser[0];

        $existExplain =  \App\Explain::where('id', $request -> explain_id) -> take(1) -> get();
        if (sizeof($existExplain) == 0){
            return ;
        }
        $existExplain = $existExplain[0];

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
        
  
        return $this -> showQuestion($questionList -> id);
    }

    public function destory($id, $user_identity)
    {
        
        $existedUser =  \App\User::where('user_identity', $user_identity) -> take(1) -> get();
    
        if (sizeof($existedUser) == 0){
            return ;
        }
        $existedUser = $existedUser[0];

        $existExplain =  \App\Explain::find($id);
        $questionList = $existExplain -> questionList;  //先存储一下 防止删除以后找不到

        if ($existExplain -> user_id == $existedUser -> id){
            $existExplain -> delete();
        }


        return $this -> showQuestion($questionList -> id);
    }
    
    public function showQuestion($questionListId){
        $questionController = new \App\Http\Controllers\Api\Question;
          return $questionController -> show($questionListId);
    }

}
