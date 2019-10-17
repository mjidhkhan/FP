@extends('layouts.layout')

@section('title', 'Edit Details of  '. $customer->name)
 @section('content')


    <div class="container mt-5">
        <h3 class="title">Customer {{ $customer->name }}</h3>
        <hr>
        <div class="row col-md-12 d-flex justify-content-center">
            <div class="col-md-6 ">
                <h5 class=" {{ $customer->active === 'Active'? 'bg-success ':'bg-secondary ' }}text-white pt-3 pb-3 pl-2">Edit Record</h5>
                <hr class="mb-3">
                <form action="/customers/{{ $customer->id }}" method="POST">
                    @method('PUT')
                    @include('customers.form')
                    <button type="submit" class="btn btn-outline-dark btn-sm float-right">Update Customer </button>
                </form>
            </div>
        </div>
    </div>


@endsection
