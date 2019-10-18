<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingVueController extends Controller
{
    public function index(){
        return [
            'message'=> 'I am coming from TestingVueController index method.',
            'hello'=> 'Your vue Component is working fine.'
        ];
    }
}
