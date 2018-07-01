<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;
use App\City;

class AgenciesController extends Controller
{
	
    public function index(){
    	$agencies = Agency::simplePaginate(5);
    	return view('agencies.index')->with('agencies', $agencies);
    }

    public function create(){
    	$cities = City::all();
    	return view('agencies.create')->with('cities', $cities);
    }

    public function store(Request $request){
    	Agency::create($request->input());
    	return redirect()->to('agencias');
    }

    public function edit($id){
    	$agency = Agency::find($id);
    	$cities = City::all();
    	return view('agencies.edit')->with(['agency' => $agency, 'cities' => $cities]);
    }
    public function update(Request $request, $id){
    	$agency = Agency::find($id);
    	$agency->update($request->input());
    	return redirect()->to('agencias');
    }
    public function destroy($id){
    	$agency = Agency::find($id);
    	$agency->delete();
    	return redirect()->to('agencias');
    }
}
