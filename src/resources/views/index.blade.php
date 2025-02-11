@extends('layout.app')

@section('title', 'ホーム')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <div class="index-container">
        <h1 class="janken-title">ジャンケンを始めましょう！！</h1>

        <div class="janken-images">
            <div>
                <a href="{{ route('result', ['hand' => 0]) }}">
                    <img class="janken-image" src="{{ asset('img/1501948.jpg') }}" alt="グー">
                </a>
            </div>
            <div>
                <a href="{{ route('result', ['hand' => 1]) }}">
                    <img class="janken-image" src="{{ asset('img/1501947.jpg') }}" alt="チョキ">
                </a>
            </div>
            <div>
                <a href="{{ route('result', ['hand' => 2]) }}">
                    <img class="janken-image" src="{{ asset('img/1501953.jpg') }}" alt="パー">
                </a>
            </div>
        </div>

        <div>
            <button class="history-button" onclick="location.href='{{ route('historyShow') }}'">対戦履歴</button>
        </div>
    </div>
@endsection
