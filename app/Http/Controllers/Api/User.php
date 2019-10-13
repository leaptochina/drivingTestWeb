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
}
