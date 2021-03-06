<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Support\Facades\Mail;
use App\Events\NewCustomerHasRegisteredEvent;

class CustomersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $activecustomers = Customer::active()->get();
        $inactivecustomers = Customer::inactive()->get();
        $companies = Company::all();
        return view('customers.index',compact('activecustomers','inactivecustomers', 'companies'));
    }

    public function create(Customer $customer , Request $request){

        $companies = Company::all();

        //$customer = new Customer();

        return view('customers.create',compact('companies', 'customer'));

    }
    public function store(Customer $customer, Request $request)
    {

        $nc = $customer->create($this->validateCustomer());

        event(new NewCustomerHasRegisteredEvent($nc));
       

        // Rejister to NewsLetter
       // dump('Register to newsletter');

        //Slack notification to Admin
       // dump('Slack message here');

        //return redirect('customers');
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
