<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Marketplace;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $marketplaces = collect(\DB::select("SELECT count(*) as qtde, 
        m.name from bets_details b inner join marketplaces m on b.marketplace_id = m.id group by
        m.name order by qtde desc limit 5 "));

        $wins = collect(\DB::select("SELECT count(*) as qtde, 
        b.status_bet from bets b where status_bet='Win' group by
        b.status_bet order by qtde desc limit 1"));

        $loses = collect(\DB::select("SELECT count(*) as qtde, 
        b.status_bet from bets b where status_bet='Lose' group by
        b.status_bet order by qtde desc limit 1"));

        $win_values = DB::table('bets')
        ->select(DB::raw('SUM(value_profit) as total'))
        ->where(['status_bet' => 'Win', 'status' => 'Active', 'user_id' => Auth::user()->id])
        ->whereMonth('date_bet', '=', date('m'))->get();

        $lose_values = DB::table('bets')
        ->select(DB::raw('SUM(value_profit) as total'))
        ->where(['status_bet' => 'Lose', 'status' => 'Active', 'user_id' => Auth::user()->id])
        ->whereMonth('date_bet', '=', date('m'))->get();
        
        return view('home', compact('marketplaces','wins','loses','win_values','lose_values'));
    }
}
