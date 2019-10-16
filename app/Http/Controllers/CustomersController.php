<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        return view('customers.customers',['customers'=>Customer::all()]);
    }

    public function store()
    {
        Customer::create($this->validateCustomer());

        return redirect('customers')->with('success', 'Customer Data  Created!');
    }

    public function create(Customer $customer , Request $request){

        //

    }
    public function show(Customer $customer , Request $request){

        return view('customers.edit', ['customer'=>$customer]);

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
        ]);
    }



}
