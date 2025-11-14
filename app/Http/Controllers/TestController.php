<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        return "Hello, World!";
    }

    public function thisIsIWantMethod(){
        return "This is the method I want.";
    }
}