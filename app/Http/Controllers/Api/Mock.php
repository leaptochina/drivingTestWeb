<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;

class Mock extends Controller
{


    public function start($user_identity)
    {
         //$user_identity, $email, $phone, $icon, $name
         $existedUser =  \App\User::where('user_identity', $user_identity) -> first();
        
         if ($existedUser == null){
             return;
         }

         $mock =  new \App\MockHistory();
         $mock -> user_id = $existedUser -> id;
         $mock -> start_time = new DateTime();
         $mock -> save();

        //创建驾考题目
        $questions = DB::select('select * from `question_lists` order by rand() limit 35');
        $questionArray = array();
        foreach($questions as $question){
            array_push($questionArray, $question -> id);
        }

        $r = [
            'id' => $mock -> id,
            'questionArray' => $questionArray,
        ];
        return $r;


    }
    
    public function finished(Request $request)
    {
        //$user_identity, $email, $phone, $icon, $name
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> first();
    
        if ($existedUser == null){
            return "User not Exist";
        }

        $mock =  \App\MockHistory::find($request -> id);
        if ($mock == null){
            return;
            return "Record Not Exist";
            
        }
        if ($mock -> user_id != $existedUser -> id){
            return;
            return  "NOT SAME USER";
        }
        
        $startTime = strtotime($mock -> start_time);
        $endTime = strtotime(date('Y-m-d H:i:s'));
        $consumeTime = $endTime - $startTime;//开始时间 时间戳

        if ($consumeTime > 60 * 31){
            return;
            return "Too much Time Consume";
        }
        if ($consumeTime > 60 * 30){
            $consumeTime = 60 * 30;
        }
        //最多错三道 对32
        $score = $request -> correct_count * 120;
        $score = $score + (60 * 30 - $consumeTime);

        $mock -> correct_count = $request -> correct_count;
        $mock -> consume_time = floor($consumeTime);
        $mock -> evaluate_score = $score;
        $mock -> save();

      

        return $mock;


    }

    //全球排名结果
    public function all(){
        

        return "";
    }

}
