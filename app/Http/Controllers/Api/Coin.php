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

    public function enableExpend($user_identity){
        $price = config('app.extend_price');


        $user =  \App\User::where('user_identity', $user_identity) -> first();
        
        if ($user == null){
            return "UserNotExist";
        }

        if ($user -> enable_private_question != 1){ //开启易错题
            if ($user -> coin >= $price){ 
                $user -> coin -= $price;
                $user -> enable_private_question = 1;
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

    public function purchaseCoin($user_identity, Request $request){
        $order_id = $request -> order_id;
        $money_out = $request -> money_out;
        $purchase_token = $request -> purchase_token;
        $coin_gain = config('app.' . $request -> sku);
        $signature = $request -> signature;
        $sku = $request -> sku;
        $originalJson = $request -> originalJson;
        $purchaseTime = $request -> purchaseTime;
        $ip = $this -> getRealIp();
        $check_sum = $request -> check_sum;


        $serverVerify = md5("pine$order_id$signature");
        
        if (strtolower($check_sum) != strtolower($serverVerify)){
            return "Error";
        }

        $user =  \App\User::where('user_identity', $user_identity) -> first();
        
        if ($user == null){
            return "UserNotExist";
        }

        $existOrder =  \App\Purchase::where('order_id', $order_id) -> first();
        
        if ($existOrder != null){
            return "ExistOrder";
        }

        $purchase = new \App\Purchase;
        $purchase -> user_id = $user -> id;
        $purchase -> order_id = $order_id;
        $purchase -> money_out = $money_out;
        $purchase -> purchase_token = $purchase_token;
        $purchase -> coin_gain = $coin_gain;
        $purchase -> signature = $signature;
        $purchase -> sku = $sku;
        $purchase -> originalJson = $originalJson;
        $purchase -> purchaseTime = $purchaseTime;
        $purchase -> ip = $ip;
        $purchase -> save();

        $user -> coin += $coin_gain;
        $user -> save();






        return $user;

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

    public function getRealIp() {
        $ip = false;
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip) {
                array_unshift($ips, $ip);
                $ip = FALSE;}
            for ($i = 0; $i < count($ips); $i++) {
                if (!eregi("^(10│172.16│192.168).", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }

}
