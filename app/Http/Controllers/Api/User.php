<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class User extends Controller
{
    

    public function show($user_id)
    {
        $questionList =  \App\User::find($user_id);

        $r = array();
        $r['id'] = $questionList -> id;
        $r['icon'] = $questionList -> icon;
        $r['name'] = $questionList -> name;
        $r['email'] = $questionList -> email;


        return $r; 
    }
    


    public function store(Request $request)
    {
        //$user_identity, $email, $phone, $icon, $name
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> take(1) -> get();
        
        if (sizeof($existedUser) == 0){
            $existedUser = new \App\User;
        }else{
            $existedUser =  $existedUser[0];
        }

        $existedUser -> user_identity = $request -> user_identity;
        $existedUser -> email = $request -> email;
        $existedUser -> phone = $request -> phone;
        $existedUser -> icon = $request -> icon;
        $existedUser -> name = $request -> name;
        $existedUser -> save();

        return $existedUser;
    }
}
