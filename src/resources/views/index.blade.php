@extends('layout.app')

@section('title', 'ホーム')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <div class="index-container">
        <h1 class="janken-title">ジャンケンを始めましょう！！</h1>

        <div class="janken-images">
            <div>
                <img class="janken-image" src="{{ asset('img/1501948.jpg') }}" alt="グー">
            </div>
            <div>
                <img class="janken-image" src="{{ asset('img/1501947.jpg') }}" alt="チョキ">
            </div>
            <div>
                <img class="janken-image" src="{{ asset('img/1501953.jpg') }}" alt="パー">
            </div>
        </div>

        <div>
            <button class="history-button">対戦履歴</button>
        </div>
    </div>
@endsection
