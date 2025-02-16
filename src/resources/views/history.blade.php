@extends('layout.app')

@section('title', '対戦履歴')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    <div class="index-container">
        <h1 class="janken-title">対戦履歴</h1>
        <div class="history-space">
            <h2>勝率</h2>
            <h2>{{ $win_rate }}%</h2>
        </div>
        <div class="history-space">
            <h2>引き分け</h2>
            <h2 style="padding-right: 25px;">{{ $draw_rate }}%</h2>
        </div>
        <div class="history-space">
            <h2>敗率</h2>
            <h2>{{ $lose_rate }}%</h2>
        </div>
    </div>

    <div class="button-area">
        <button type="button" onClick="history.back()" class="return-button">戻る</button>
    </div>
@endsection
