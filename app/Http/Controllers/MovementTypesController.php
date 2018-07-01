<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovementType;

class MovementTypesController extends Controller
{
	
    public function index(){
        $mtipos = MovementType::simplePaginate(5);
        return view('movementtypes.index')->with('mtipos', $mtipos);
    }

    public function create(){
        return view('movementtypes.create');
    }

    public function store(Request $request){
        MovementType::create($request->input());
        return redirect()->to('mtipos');
    }

    public function edit($id){
        $mtipo = MovementType::find($id);
        return view('movementtypes.edit')->with('mtipo', $mtipo);
    }

    public function update(Request $request, $id){
        $mtipo = MovementType::find($id);
        $mtipo->update($request->input());
        return redirect()->to('mtipos');
    }

    public function destroy($id){
        $accountType = MovementType::find($id);
        $accountType->delete();
        return redirect()->to('mtipos');
    }
}
