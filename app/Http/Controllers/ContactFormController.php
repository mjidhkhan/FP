<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(Request $request){

        return view('contact.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data));
        return redirect('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
