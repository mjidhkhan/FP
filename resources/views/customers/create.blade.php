@extends('layouts.layout')
@section('title', 'New Customer')
 @section('content')
<div class="container mt-5">
        <h3 class="title">New Customer </h3>
        <hr>
    <div class="row col-md-12 d-flex justify-content-center">

            <div class="col-md-6 ">
                <form action="/customers" method="POST">
                    @csrf
                    @include('customers.form')

                <button type="submit" class="btn btn-outline-dark btn-sm float-right">Add Customer </button>
                </form>
            </div>
     </div>
    </div>    <!-- ./container ends -->


@endsection
