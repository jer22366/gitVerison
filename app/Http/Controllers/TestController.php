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

    public function idontwantthismethod()
    {
        return "This method should not be here.";
    }

    public function test()
    {
        return "test";
    }
}