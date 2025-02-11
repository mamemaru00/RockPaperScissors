<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history;
use Illuminate\Support\Number;

class HistoryController extends Controller
{
    public function historyShow() {
        $mh_history = history::All();

        $win_rate  = round($mh_history->percentage(fn($item) => $item->result === '勝利！！') * 1, 2);
        $draw_rate = round($mh_history->percentage(fn($item) => $item->result === '引き分け') * 1, 2);
        $lose_rate = round($mh_history->percentage(fn($item) => $item->result === '負け！！') * 1, 2);

        return view('history', compact(
            'mh_history',
            'win_rate',
            'draw_rate',
            'lose_rate'
        ));
    }
}
