<?php

namespace App\Http\Controllers\Api;

use Google\Cloud\Translate\TranslateClient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class Feedback extends Controller
{
    public function store(Request $request)
    {
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> first();
    
        if ($existedUser == null){
            return "User not Exist";
        }

        $feedback = new \App\Feedback;
      

        $feedback -> user_id = $existedUser -> id;
        $feedback -> email = $request -> email;
        $feedback -> phone = $request -> phone;
        $feedback -> detail = $request -> detail;
        $feedback -> question_list_id = $request -> question_list_id;
        $feedback -> save();


        $r = [
            'feedback' => $feedback,
            'message' => 'Thanks for your feedback, we will deal with it ASAP'
        ];


        return $r; 



    }
}
