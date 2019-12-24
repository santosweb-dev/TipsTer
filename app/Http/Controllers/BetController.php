<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Account;
use App\Bet;
use App\BetDetail;
use App\Event;
use App\Bookmaker;
use App\Competition;
use App\Marketplace;
use App\Sport;

class BetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $accounts = Account::where([
            'status' => 'Active'
        ])->get();

        $competitions = Competition::where([
            'status' => 'Active'
        ])->get();

        $marketplaces = Marketplace::where([
            'status' => 'Active'
        ])->get();

        $sports = Sport::where([
            'status' => 'Active'
        ])->get();
        
        $registers = Bet::where([
            'user_id' => Auth::user()->id,
            'status' => 'Active'
        ])->orderBy('date_bet', 'desc')->paginate(10);
        return view('bets.index',compact('registers','accounts','competitions','marketplaces','sports'));
    }

    public function store(Request $request)
    {
        if ($request->value_profit < 0 )
        {
            $register = new Bet;
            $register->user_id              = $request->user_id;
            $register->status               = 'Active';
            $register->account_id           = $request->account_id;
            $register->value_profit         = $request->value_profit;
            $register->value_bet            = $request->value_bet;
            $register->status_bet           = 'Lose';
            $register->date_bet             = $request->date_event; 
            $register->save();
        } else if ($request->value_profit > 0 )
        {
            $register = new Bet;
            $register->user_id              = $request->user_id;
            $register->status               = 'Active';
            $register->account_id           = $request->account_id;
            $register->value_profit         = $request->value_profit;
            $register->value_bet            = $request->value_bet;
            $register->status_bet           = 'Win';
            $register->date_bet             = $request->date_event; 
            $register->save();
        } else {
            $register = new Bet;
            $register->user_id              = $request->user_id;
            $register->status               = 'Active';
            $register->account_id           = $request->account_id;
            $register->value_profit         = $request->value_profit;
            $register->value_bet            = $request->value_bet;
            $register->status_bet           = 'Return';
            $register->date_bet             = $request->date_event; 
            $register->save();
        }

        $registerEvent = new Event;
        $registerEvent->name            = $request->name;
        $registerEvent->date_event      = $request->date_event;
        $registerEvent->save();

        $registerDetail = new BetDetail;
        $registerDetail->bet_id          = $register->id;
        $registerDetail->event_id        = $registerEvent->id;
        $registerDetail->sport_id        = $request->sport_id;
        $registerDetail->competition_id  = $request->competition_id;
        $registerDetail->marketplace_id  = $request->marketplace_id;
        $registerDetail->odd             = $request->odd;
        //$registerDetail->status_bet      = $request->status_bet;
        $registerDetail->status          = 'Active';
        $registerDetail->date_bet        = $request->date_event;           

        $query = Account::where([
            'id' => $request->account_id
        ]);

        $query->increment('balance', $request->value_profit);

        $registerDetail->save();

        if ($registerDetail->save()) {
            $request->session()->flash('success', 'Aposta feita com sucesso!');
        } else {
            $request->session()->flash('error', 'Erro ao fazer a aposta');
        }

        return back(); 
    }

    public function show($id)
    {
        $registers = Bet::all();
        return view('bets.historic',compact('registers'));
    }

    public function update(Request $request, $id)
    {
        //
    }
}
