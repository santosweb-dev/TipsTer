<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Account;

class DepositController extends Controller
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
        
        $registers = Transaction::where([
            'status' => 'Active'
        ])->paginate(5);
        return view('deposit.index', compact('registers','accounts'));
    }


    public function store(Request $request)
    {
        $register = new Transaction;
        $register->user_id              = $request->user_id;
        $register->account_id           = $request->account_id;
        $register->value                = $request->value;
        $register->date                 = $request->date;
        $register->type                 = $request->type;
        $register->status               = 'Active';
        $register->save();

        $query = Account::where([
            'id' => $request->account_id
        ]);

        $query->increment('balance', $request->balance);

        if ($register->save()) {
            $request->session()->flash('success', 'Depósito realizado com sucesso!');
        } else {
            $request->session()->flash('error', 'Erro ao fazer o depósito');
        }
    }

    public function show($id)
    {
        //
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
