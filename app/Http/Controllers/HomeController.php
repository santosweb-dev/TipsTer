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

        
        
        return view('home', compact('marketplaces'));
    }
}
