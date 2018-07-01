<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Agency;
use App\Customer;
use App\AccountType;

class AccountsController extends Controller
{
	
    public function index(){
    	$accounts = Account::simplePaginate(5);
    	return view('accounts.index')->with('accounts', $accounts);
    }

    public function create(){
    	$agencies  = Agency::all();
        $customers = Customer::all();
        $atipos = AccountType::all();
    	return view('accounts.create')->with(['agencies' => $agencies, 'customers' => $customers, 'atipos' => $atipos]);
    }

    public function store(Request $request){
    	Account::create($request->input());
    	return redirect()->to('contas');
    }

    public function edit($id){
        $agencies  = Agency::all();
        $customers = Customer::all();
        $atipos    = AccountType::all();
        $account   = Account::find($id);
        return view('accounts.edit')->with(['agencies' => $agencies, 'customers' => $customers, 'atipos' => $atipos, 'account' => $account]);
    }
    public function update(Request $request, $id){
    	$account = Account::find($id);
    	$account->update($request->input());
    	return redirect()->to('contas');
    }
    public function destroy($id){
    	$account = Account::find($id);
    	$account->delete();
    	return redirect()->to('contas');
    }
}
