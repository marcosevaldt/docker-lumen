<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountType;

class AccountTypesController extends Controller
{
	
    public function index(){
        $atipos = AccountType::simplePaginate(5);
        return view('accounttypes.index')->with('atipos', $atipos);
    }

    public function create(){
        return view('accounttypes.create');
    }

    public function store(Request $request){
        AccountType::create($request->input());
        return redirect()->to('atipos');
    }

    public function edit($id){
        $atipo = AccountType::find($id);
        return view('accounttypes.edit')->with('atipo', $atipo);
    }

    public function update(Request $request, $id){
        $atipo = AccountType::find($id);
        $atipo->update($request->input());
        return redirect()->to('atipos');
    }

    public function destroy($id){
        $accountType = AccountType::find($id);
        $accountType->delete();
        return redirect()->to('atipos');
    }
}
