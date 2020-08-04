<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function form(){
        return view('form');
    }

    public function welcome2(){
        return view('welcome2');
    }
}
