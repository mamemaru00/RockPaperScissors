<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JankenJudgeController;
use App\Http\Controllers\HistoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(JankenJudgeController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/result', 'result')->name('result');
});

Route::controller(HistoryController::class)->group(function () {
    Route::get('/history', 'historyShow')->name('historyShow');
});