<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $activecustomers = Customer::active()->get();
        $inactivecustomers = Customer::inactive()->get();
        $companies = Company::all();
        return view('customers.index',compact('activecustomers','inactivecustomers', 'companies'));
    }

    public function create(Customer $customer , Request $request){

        $companies = Company::all();
        return view('customers.create',compact('companies'));

    }
    public function store(Customer $customer, Request $request)
    {
        
        $customer->create($this->validateCustomer());
        
        return redirect('customers');
    }

    
    public function show(Customer $customer , Request $request){
        $companies = Company::all();
        return view('customers.show', compact('customer', 'companies'));

    }
    public function edit(Customer $customer , Request $request){
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));

    }

    public function update(Customer $customer , Request $request){

        $customer->update($this->validateCustomer());

        return redirect('customers')->with('success', 'Customer Data  updated!');


    }
    public function destroy(Customer $customer , Request $request){

        $customer->delete();

        return redirect('customers')->with('success', 'Customer Data deleted!');


    }

    private function validateCustomer()
    {
        return request()->validate([
            'name'=> 'required|min:4',
            'email'=> 'required|email',
            'active'=> 'required',
            'company_id'=>'required',
        ]);
    }



}
