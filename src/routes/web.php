<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JankenJudgeController;

Route::get('/', function () {
    return view('welcome');
});

// hello world画面の表示
Route::controller(JankenJudgeController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/result', 'result');
});

// Route::get('/hello', function () {
//     return 'HELLO WORLD!!';
// });