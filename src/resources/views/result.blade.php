{{-- result.blade.php --}}

@extends('layout.app')

@section('title', '結果発表')

@section('content')
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
                    @if ($userHand === 0)
                        <img class="janken-image" src="{{ asset('img/1501948.jpg') }}" alt="グー">
                    @elseif ($userHand === 1)
                        <img class="janken-image" src="{{ asset('img/1501947.jpg') }}" alt="チョキ">
                    @elseif ($userHand === 2)
                        <img class="janken-image" src="{{ asset('img/1501953.jpg') }}" alt="パー">
                    @endif
                </td>
                <td class="result-judgement">
                    <p>{{ $result }}</p>
                </td>
                <td class="cell-center">
                    @if ($cpuHand === 0)
                        <img class="janken-image" src="{{ asset('img/1501948.jpg') }}" alt="グー">
                    @elseif ($cpuHand === 1)
                        <img class="janken-image" src="{{ asset('img/1501947.jpg') }}" alt="チョキ">
                    @elseif ($cpuHand === 2)
                        <img class="janken-image" src="{{ asset('img/1501953.jpg') }}" alt="パー">
                    @endif
                </td>
            </tr>
        </table>
        <div class="button-area">
            <button type="button" onClick="history.back()" class="return-button">戻る</button>
        </div>
    </div>
@endsection
