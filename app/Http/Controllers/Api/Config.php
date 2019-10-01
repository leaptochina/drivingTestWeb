<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Config extends Controller
{
    public function all()
    {
        $configs =  \App\Config::all();
      

        return $configs;
    }

    
}
