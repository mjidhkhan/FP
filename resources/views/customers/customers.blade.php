@extends('layouts.app')


 @section('content')


    <div class="container mt-3">
        <h3 class="title">Customers </h3>
    <hr>

        <div class="row col-md-4 float-left">
            <div class="col-md-12 ">
                <h5 class="bg-secondary bg-info text-white pt-3 pb-3 pl-2">New Customer</h5>
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
                        <input type="text" class="form-control" name='email' placeholder="Enter email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="active">Customer Status</label>
                            <select class="form-control" name="active" id="active">
                                <option value="" disabled>Select customer status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company_id"> Company </label>
                            <select class="form-control" name="company_id" id="company_id">
                                @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>

                                @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-sm float-right">Add Customer </button>
                </form>
            </div>
        </div>

            <!-- View Customere Area Starts -->
        <div class="row col-md-8 float-right">
            <div class="col-md-6">
             <h5 class="bg-secondary bg-success text-white pt-3 pb-3 pl-2">Active Customers List</h5>
                <hr class="mb-5">
                <ul class="list-group ">
                     @forelse ($activecustomers as $customer)
                    <li class="list-group-item border border-success text-success">{{ $customer->name }}
                        <div class=" nav-link float-right">
                            <a href="customers/edit/{{ $customer->id }}" class="btn btn-link fa fa-edit text-info"></a>
                                <form action="customer/delete/{{ $customer->id  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class=" btn btn-link fa fa-trash  text-danger"></button>
                                </form>
                        </div>
                        <p class="small text-muted">{{ $customer->email }} </p>
                        <p class="small text-muted">{{ $customer->company->name }} </p>

                    </li>

                     @empty
                    <h4 class="display-5 text-danger"> No Active Customer Data Found!</h4>
                     @endforelse

                    </ul>
            </div>
            <div class="col-md-6">
             <h5 class="bg-secondary  text-white pt-3 pb-3 pl-2">In-active Customers List</h5>
                <hr class="mb-5">
                <ul class="list-group">
                     @forelse ($inactivecustomers as $customer)
                    <li class="list-group-item text-muted">{{ $customer->name }}
                        <div class=" nav-link float-right">
                            <a href="/customers/edit/{{ $customer->id }}" class="btn btn-link fa fa-edit text-info"></a>
                                <form action="c/ustomer/delete/{{ $customer->id  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class=" btn btn-link fa fa-trash  text-danger"></button>
                                </form>
                        </div>
                        <p class="small text-muted">{{ $customer->email }} </p>
                           <p class="small text-muted">{{ $customer->company->name }} </p>

                    </li>

                     @empty
                    <h5 class="display-5 text-danger"> No Inactive Customer Data Found!</h5>
                     @endforelse

                    </ul>
            </div>
            <!-- Companies with customers  Starts -->
            <div class="col-md-12 mt-3">
                <h5 class="bg-secondary  text-white pt-3 pb-3 pl-2">Companies</h5>
                <hr class="mb-1">
                 <div class="col-md-6">
                     <ul class="list-group">
                            @forelse ($companies as $company)
                            <h3>{{ $company->name }}</h3>
                            @forelse ($company->customers as $customer)
                                <li class="list-group-item {{ $customer->active ? 'text-success':'text-muted' }}">{{ $customer->name }} <span class="small text-muted ml-1">({{ $customer->email }})</span>
                                </li>
                            @empty
                            <h6 class="display-5 text-danger"> No Customer Data Found!</h6>
                            @endforelse

                            @empty
                            <h5 class="display-5 text-danger"> No Inactive Customer Data Found!</h5>
                            @endforelse
                    </ul>
                </div>
            </div>
            <!-- Companies with customers  Ends -->

               <!-- View Customere Area Ends  -->
        </div>    <!-- ./row ends -->
    </div>    <!-- ./container ends -->


@endsection
