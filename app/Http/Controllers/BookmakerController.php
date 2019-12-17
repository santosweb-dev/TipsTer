<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Bookmaker;

class BookmakerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registers = Account::where([
            'status' => 'Active'
        ])->get();

        $bookmakers = Bookmaker::where([
            'status' => 'Active'
        ])->get();

        return view('bookmakers.index', compact('registers','bookmakers'));
    }

    public function store(Request $request)
    {
        $register = new Account;
        $register->user_id              = $request->user_id;
        $register->bookmaker_id         = $request->bookmaker_id;
        $register->balance              = $request->balance;
        $register->user_name_bookmaker  = $request->user_name_bookmaker;
        $register->status               = 'Active';
        $register->save();

        if ($register->save()) {
            $request->session()->flash('success', 'A Banca foi adicionada com sucesso!');
        } else {
            $request->session()->flash('error', 'Erro ao adicionar a banca');
        }

        return back();
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function inactive(Request $request, $id)
    {
        $register = Account::findOrFail($request->id);
        $register->status    = 'Inactive';
        $register->save();

        if ($register->save()) {
            $request->session()->flash('success', 'Registro inativada com sucesso!');
        } else {
            $request->session()->flash('error', 'Erro ao inativa o registro');
        }

        return back();
    }
}
