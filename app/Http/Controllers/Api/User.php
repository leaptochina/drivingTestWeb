<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
    
    public function uploadIcon($user_identity, Request $request){
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> first();
        
        if ($existedUser == null){
            return "UserNotExist";
        }

        $fileName = strtotime("now");

        Image::make($request -> file('image'))->save("../resources/user_upload/{$fileName}.jpg");
        
        $existedUser -> icon = "http://drivingtest.blueberrysolution.co.nz/user_upload/{$fileName}.jpg";
        $existedUser -> save();

        echo $existedUser;
    }

    public function store(Request $request)
    {
        //$user_identity, $email, $phone, $icon, $name
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> first();
        
        if ($existedUser == null){
            $existedUser = new \App\User;
       

            $existedUser -> user_identity = $request -> user_identity;
            $existedUser -> email = $request -> email;
            $existedUser -> phone = $request -> phone;
            $existedUser -> icon = $request -> icon;
            $existedUser -> name = $request -> name;

            if ($request -> name == ""){
                if (strlen($existedUser -> phone) > 8){
                    $xing = substr($existedUser -> phone, 5, 3);  //获取手机号中间四位
                    $existedUser -> name = str_replace($xing,'****',$existedUser -> phone);  //用****进行替换
                }
                else{
                    $existedUser -> name = 'Anonymous User';
                }
                
            }

            if ($request -> icon == ""){
                $existedUser -> icon = 'http://drivingtest.blueberrysolution.co.nz/imgs/no_user.png';
            }


            $existedUser -> save();
        }

        return $existedUser;
    }
}
