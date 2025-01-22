@extends('layout.app')

@section('title', '結果発表')

@section('content')
    <!-- result.blade.php -->
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">

    <div class="result-container">
        <h1 class="result-title">結果発表</h1>
        <table class="result-table">
            <tr>
                <th class="player-name-position">
                    <div class="player-area">
                        <h1>自分</h1>
                    </div>
                </th>
                <th></th>
                <th class="cpu-name-position">
                    <div class="cpu-area">
                        <h1>CPU</h1>
                    </div>
                </th>
            </tr>
            <tr>
                <td class="cell-center">
                    <img class="result-image" src="{{ asset('img/1501948.jpg') }}" alt="">
                </td>
                <td class="result-judgement">
                    <p>勝利！！</p>
                </td>
                <td class="cell-center">
                    <img class="result-image" src="{{ asset('img/1501953.jpg') }}" alt="">
                </td>
            </tr>
        </table>
        <div class="button-area">
            <button class="return-button">戻る</button>
        </div>
    </div>
@endsection
