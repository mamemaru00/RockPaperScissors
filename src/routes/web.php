<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JankenJudgeController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(JankenJudgeController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/result', 'result')->name('result');
});