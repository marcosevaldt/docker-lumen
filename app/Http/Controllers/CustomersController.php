<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\City;

class CustomersController extends Controller
{
	
    public function index(){
        $customers = Customer::simplePaginate(5);
        return view('customers.index')->with('customers', $customers);
    }

    public function create(){
        $cities = City::all();
        return view('customers.create')->with('cities', $cities);
    }

    public function store(Request $request){
        Customer::create($request->input());
        return redirect()->to('clientes');
    }

    public function edit($id){
        $customer   = Customer::find($id);
        $cities     = City::all();
        return view('customers.edit')->with(['customer' => $customer, 'cities' => $cities]);
    }

    public function update(Request $request, $id){
        $customer = Customer::find($id);
        $customer->update($request->input());
        return redirect()->to('clientes');
    }

    public function destroy($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->to('clientes');
    }
}
