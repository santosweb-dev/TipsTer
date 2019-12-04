<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bet;
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
        $bookmakers = Bookmaker::where([
            'user_id' => Auth::user()->id,
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
        ])->get();
        return view('bets.index',compact('registers','bookmakers','competitions','marketplaces','sports'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $registers = Bet::all();
        return view('bets.historic',compact('registers'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
