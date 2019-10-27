<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;

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

    public function updateNickname($user_identity, Request $request){
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> first();
        
        if ($existedUser == null){
            return "UserNotExist";
        }

        
        $existedUser -> name = $request -> nickname;
        $existedUser -> save();

        return $existedUser;
    }

    public function updateEmail($user_identity, Request $request){
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> first();
        
        if ($existedUser == null){
            return "UserNotExist";
        }

        $existedUser -> email = $request -> email;
        $existedUser -> save();

        return $existedUser;

    }
    

    public function uploadIcon($user_identity, Request $request){
        $existedUser =  \App\User::where('user_identity', $request -> user_identity) -> first();
        
        if ($existedUser == null){
            return "UserNotExist";
        }

        //Log::info($request);


        
        $image = $request -> file('image');
        $fileName = strtotime("now") . '.' . $image -> getClientOriginalExtension();
        //$image -> move("../resources/user_upload/", $fileName);

        Image::make($request -> file('image')) -> resize(500,500) -> save("../resources/user_upload/{$fileName}");



        
        $existedUser -> icon = "http://{$_SERVER['HTTP_HOST']}/user_upload/{$fileName}";
        $existedUser -> save();

        return $existedUser;
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
