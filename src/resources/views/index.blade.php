@extends('layout.app')

@section('title', 'ホーム')

@section('content')
    <div style="text-align: center;">
        <h1 style="margin: 5%;">ジャンケンを始めましょう！！</h1>
        <div style="display: flex; justify-content: space-around;">
            <div>
                <img style="width: 60%; cursor: pointer;" src="{{ asset('img/1501948.jpg') }}" alt="">
            </div>
            <div>
                <img style="width: 60%; cursor: pointer;" src="{{ asset('img/1501947.jpg') }}" alt="">
            </div>
            <div>
                <img style="width: 60%; cursor: pointer;" src="{{ asset('img/1501953.jpg') }}" alt="">
            </div>
        </div>
        <div>
            <button style="font-size: 200%; margin: 5%; color: white; background-color: black; border-radius: 5px;">
                対戦履歴
            </button>
        </div>
    </div>
@endsection
