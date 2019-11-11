<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class Vehicle{
    protected static $color = 'W';
    protected static $doors = 4;
    public static function getColor(){
        return self::$color;
    }
    public static function getDoors(){
        return self::$doors;
    }
}
class Cab extends Vehicle{
    protected static $color = 'W';
    protected static $doors = 3;

    public static function getDoors(){
        return self::$doors;
    }
}

trait Road{
    public function goWhere(){
        echo "1";
    }
}
class A{
    use Road;

    public function goWhat(){
        echo "2";
    }
}
class B{
    use Road;

    public function goWhat(){
        echo "3";
    }
}

class Test extends Controller
{
    public function test(){
        // session_start();
        // $count = $_SESSION["count"]++;
        // echo $count;
        // echo "<br>--------------------------------------------------------<br>";


        $t = "How Now Brown Cow";
        echo preg_replace("/([A-Z])/", "<strong>$1</strong>", $t);
        echo "<br>--------------------------------------------------------<br>";

        echo Vehicle::getColor() . " " . Vehicle::getDoors() . "<br>";
        echo Cab::getColor() . " " . Cab::getDoors();
        echo "<br>--------------------------------------------------------<br>";
        

        $toaddress = "C. S. Leasdf@asdf.com";
        $toaddress = filter_var($toaddress, FILTER_SANITIZE_EMAIL);
        $toaddress = filter_var($toaddress, FILTER_VALIDATE_EMAIL);
        echo $toaddress;
        echo FILTER_SANITIZE_EMAIL;
        echo "<br>--------------------------------------------------------<br>";

        $x = new A();
        $x -> goWhere();
        $x -> goWhat();
        echo "<br>--------------------------------------------------------<br>";

        $a = array();
        $a[] = array(5, "a");
        $a[] = array(10, "b");
        $a[] = array(3, "c");
        $a[] = array(1, "d");

        foreach($a as list($x, $y)){
            if ($x >= 3){
                echo $x. " " . $y . "<br>";
            }
        }
        echo "<br>--------------------------------------------------------<br>";




    }

    
    

}
