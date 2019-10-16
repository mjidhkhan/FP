<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(Customer $customer)
    {
        return view('customers.customers',['customers'=>$customer::all()]);
    }


    public function store(Request $request, Customer $customer)
    {

        
        $customer = $request->validate($this->getValidate());
       // dd($customer);
        $customer->save();

        //return redirect('customers');
    }


    private function getValidate()
    {
        return [
            'name'=> 'required|min:4',
            'email'=>'required|email',
        ];
    }

}
