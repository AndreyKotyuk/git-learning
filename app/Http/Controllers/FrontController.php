<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function index(){
        $mass = ['first'=>1,'second'=>'Andrei'];
        $surname ="Kotyuk";
        return view('index',compact('mass','surname'));
    }
}
