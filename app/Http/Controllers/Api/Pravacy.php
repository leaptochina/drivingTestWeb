<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Pravacy extends Controller
{
    public function show()
    {
        $r = [
            '隐私政策' => "程序将要使用您的摄像头及存储权限，获取权限前，程序将通知您",
        ];
      

        return $r;
    }

    
}
