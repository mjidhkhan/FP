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

        return redirect('customers');
    }


    private function validateCustomer()
    {
        return request()->validate([
            'name'=> 'required|min:4',
            'email'=> 'required|email',
        ]);
    }

}
