<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JankenJudgeController extends Controller
{
    public function index() 
    {
        return view('index');
    }

    public function result() 
    {
        return view('result');
    }
}
