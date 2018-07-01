<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movement;
use App\Account;
use App\MovementType;

class MovementsController extends Controller
{
	
    public function index(){
    	$movements = Movement::simplePaginate(5);
    	return view('movements.index')->with('movements', $movements);
    }

    public function create(){
    	$accounts   = Account::all();
        $mtipos     = MovementType::all();
    	return view('movements.create')->with(['accounts' => $accounts, 'mtipos' => $mtipos]);
    }

    public function store(Request $request){
    	Movement::create($request->input());
    	return redirect()->to('movimentacoes');
    }

    public function edit($id){
        $accounts   = Account::all();
        $mtipos     = MovementType::all();
        $movement   = Movement::find($id);
        return view('movements.edit')->with(['accounts' => $accounts, 'mtipos' => $mtipos, 'movement' => $movement]);
    }
    public function update(Request $request, $id){
    	$movement = Movement::find($id);
    	$movement->update($request->input());
    	return redirect()->to('movimentacoes');
    }
    public function destroy($id){
    	$movement = Movement::find($id);
    	$movement->delete();
    	return redirect()->to('movimentacoes');
    }
}
