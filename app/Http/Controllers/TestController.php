<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        
        return "Hello, World! Test merge Version1";
    }

    public function thisIsIWantMethod(){
        return "This is the method I want.";
    }

    public function anotherMethod(){
        return "This is another method.";
    }
    public function version1Test3(){
        return "This is version 1 test method 3.";
    }

    public function version3Test2(){
        return "This is version 3 test method 2.";
    }
}