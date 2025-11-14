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

    public function idontwantthismethod()
    {
        return "This method should not be here.";
    }
}