<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    public function test(){
        echo config('app.APP_ENV_TRANSLATE');
    }

    
    

}
