@extends('layout.app')

@section('title', '結果発表')

@section('content')
    <div style="text-align: center;">
        <h1 style="margin: 5%;">結果発表</h1>
    </div>
    <table>
        <tr>
            <th>
                <div style="display: flex; justify-content: center;">
                    <div style="background: darkgray; width: 50%;">
                        <h1>自分</h1>
                    </div>
                </div>
            </th>
            <th></th>
            <th>
                <div style="display: flex; justify-content: center;">
                    <div style="background: darkgray; width: 50%;">
                        <h1>CPU</h1>
                    </div>
                </div>
            </th>
        </tr>
        <tr>
            <td style="text-align: center;">
                <img style="width: 60%; cursor: pointer;" src="{{ asset('img/1501948.jpg') }}" alt="">
            </td>
            <td style="width: 20%; font-size: 500%; text-align: center;">
                <p>勝利！！</p>
            </td>
            <td style="text-align: center;">
                <img style="width: 60%; cursor: pointer;" src="{{ asset('img/1501953.jpg') }}" alt="">
            </td>
        </tr>
    </table>
    <div style="text-align: center;">
        <button style="width: 15%; font-size: 200%;">戻る</button>
    </div>
@endsection
