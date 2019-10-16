@extends('layouts.layout')


 @section('content')


    <div class="container mt-5">
        <h3 class="title">Customers </h3>
    <hr>

        <div class="row">
            <div class="col-md-4 ">
                <h5 class="bg-secondary text-white pt-3 pb-3 pl-2">New Customer</h5>
                <hr class="mb-3">
                <form action="customers" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer Name</label>
                        <input type="text" class="form-control " name="name" placeholder="Enter Customer Name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control" name='email' placeholder="Enter email" value="{{ old('name') }}">
                        @error('email')
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @enderror

                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-sm float-right">Add Customer </button>
                </form>
            </div>
            <div class="col-md-8">
             <h5 class="bg-secondary text-white pt-3 pb-3 pl-2">Customers List</h5>
              @include('message')
                <hr class="mb-5">


                <ul class="list-group">
                     @forelse ($customers as $customer)
                    <li class="list-group-item">{{ $customer->name }}
                        <div class=" nav-link float-right">
                            <a href="customers/edit/{{ $customer->id }}" class="btn btn-link fa fa-edit text-info"></a>
                                <form action="customer/delete/{{ $customer->id  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class=" btn btn-link fa fa-trash  text-danger"></button>
                                </form>
                        </div>
                        <p class="small text-muted">{{ $customer->email }} </p>

                    </li>

                     @empty
                    <p class="display-4 text-danger"> No customer Data found!</p>
                     @endforelse

                    </ul>
            </div>
        </div>
    </div>


@endsection
