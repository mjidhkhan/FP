@extends('layouts.layout')


 @section('content')


    <div class="container mt-5">
        <h3 class="title">Customers</h3>
    <hr>

        <div class="row">
            <div class="col-md-4 ">
                <h5 class="bg-secondary text-white pt-3 pb-3 pl-2">New Customer</h5>
                <hr class="mb-3">
                <form action="/customers/edit/{{ $customer->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer Name</label>
                        <input type="text" class="form-control " name="name" placeholder="Enter Customer Name" value="{{ $customer->name  }}">
                        @error('name')
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control" name='email' placeholder="Enter email" value="{{ $customer->email }}">
                        @error('email')
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-sm float-right">Update Customer </button>
                </form>
            </div>

        </div>
    </div>


@endsection
