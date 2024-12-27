<?php

namespace App\Http\Controllers;

class TestController extends Controller{

    public function test(){
        $num1 = 34;
        $num2 = 45;
        return ($num1 + $num2 );  
    }

}