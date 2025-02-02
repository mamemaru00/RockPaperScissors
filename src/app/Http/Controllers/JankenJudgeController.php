<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JankenJudgeController extends Controller
{
    public function index() 
    {
        return view('index');
    }

    public function result(Request $request) 
    {
        $userHand = (int) $request->hand;
    
        $random = [0,1,2];
        $cpuHand = $random[array_rand($random)];
    
        if ($userHand === $cpuHand) {
            $result = '引き分け';
        } elseif (
            ($userHand === 0 && $cpuHand === 1) ||
            ($userHand === 1 && $cpuHand === 2) ||
            ($userHand === 2 && $cpuHand === 0)
        ) {
            $result = '勝利！！';
        } else {
            $result = '負け！！';
        }
    
        return view('result', compact('result', 'userHand', 'cpuHand'));
    }
    
}
