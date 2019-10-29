<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;

class Coin extends Controller
{
    public function signin($user_identity){
        $user =  \App\User::where('user_identity', $user_identity) -> first();
        
        $sign_in_max_coin = config('app.sign_in_max_coin');

        
        if ($user == null){
            return "UserNotExist";
        }

        $date = date("Y-m-d");
        if ($user -> last_daily_sign_in != $date){
            $addCoin = rand(1, $sign_in_max_coin);
            $user -> last_daily_sign_in = $date;
            $user -> coin += $addCoin;
            $user -> save();
        }else{
            $addCoin = 0;
        }

        $r = [
            'addCoin' => $addCoin,
            'user' => $user
        ];

        return $r;

    }

    public function enableProne($user_identity){
        $price = config('app.prone_price');


        $user =  \App\User::where('user_identity', $user_identity) -> first();
        
        if ($user == null){
            return "UserNotExist";
        }

        if ($user -> enable_prone != 1){ //开启易错题
            if ($user -> coin >= $price){ 
                $user -> coin -= $price;
                $user -> enable_prone = 1;
                $user -> save();
                $code = 0;      //钱够 开通成功

            }else{      
                $code = 1;      //钱不够
            }
        }
        else{
            $code = 2;      //本功能已经开通
        }

        $r = [
            'code' => $code,
            'user' => $user
        ];

        return $r;

    }

    public function earnCoin($user_identity, $time, $check_sum){
        $video_reward = config('app.video_reward');

        $serverVerify = md5($time . "pine" . $user_identity);
        
        if (strtolower($check_sum) != strtolower($serverVerify)){
            return "Error";
        }

        $user =  \App\User::where('user_identity', $user_identity) -> first();
        
        if ($user == null){
            return "UserNotExist";
        }

        $user -> coin += $video_reward;
        $user -> save();

        return $user;

    }

}
