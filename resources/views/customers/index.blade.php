@extends('layouts.layout')

@section('title', 'Customer List')

 @section('content')
    <div class="container mt-3">
        <div class="row col-12  d-flex justify-content-start">
            <h3 class="title float-left">Customers</h3>
        </div>
        <p class="d-flex justify-content-end">
                <a   class="btn btn-outline-info" href="/customers/create">Add New Customer</a>
            </p>
         <hr>
            <!-- View Customere Area Starts -->
        <div class="row">
            <div class="col-md-4">
             <h5 class="bg-secondary bg-success text-white pt-3 pb-3 pl-2">Active Customers List</h5>
                <hr class="mb-5">
                 @forelse ($activecustomers as $customer)
                <ul class="list-group mt-1">
                    <li class="list-group-item border border-success text-success">{{ $customer->name }} <span class="float-right small"> {{ $customer->active }}</span>
                        <p class="small text-muted">{{ $customer->email }}</p>
                        <p class="small text-muted">{{ $customer->company->name }} </p>
                        <div class="justify-content-center">
                                <form action="customers/{{ $customer->id  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class=" btn btn-link fa fa-trash  text-danger float-left"></button>
                                </form>
                            <a href="customers/{{ $customer->id }}" class="btn btn-link fa fa-eye text-info float-right"></a>
                                 <a href="/customers/{{ $customer->id }}/edit" class="btn btn-link fa fa-edit text-info float-right"></a>
                        </div>
                    </li>
                    </ul>
                     @empty
                    <h4 class="display-5 text-danger"> No Active Customer Data Found!</h4>
                    </ul>
                     @endforelse
            </div>
            <div class="col-md-4">
             <h5 class="bg-secondary  text-white pt-3 pb-3 pl-2">In-active Customers List</h5>
                <hr class="mb-5">
                     @forelse ($inactivecustomers as $customer)
                <ul class="list-group mt-1">
                    <li class="list-group-item text-muted">{{ $customer->name }}<span class="float-right small"> {{ $customer->active }}</span>
                        <p class="small text-muted">{{ $customer->email }} </p>
                        <p class="small text-muted">{{ $customer->company->name }} </p>
                        <div class="justify-content-center">
                                <form action="customers/{{ $customer->id  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class=" btn btn-link fa fa-trash  text-danger float-left"></button>
                                </form>
                                 <a href="customers/{{ $customer->id }}" class="btn btn-link fa fa-eye text-info float-right"></a>
                                 <a href="customers/{{ $customer->id }}/edit" class="btn btn-link fa fa-edit text-info float-right"></a>
                        </div>
                    </li>
                    </ul>
                     @empty
                    <h5 class="display-5 text-danger"> No Inactive Customer Data Found!</h5>
                    </ul>
                     @endforelse
            </div>
            <!-- Companies with customers  Starts -->
            <div class="col-md-4">
                <h5 class="bg-info text-white pt-3 pb-3 pl-2">Companies</h5>
                <hr class="mb-1">
                 <div class="col-md-12">
                     <ul class="list-group">
                            @forelse ($companies as $company)
                            <h3>{{ $company->name }}</h3>
                            @forelse ($company->customers as $customer)
                                <li class="list-group-item {{ $customer->active === 'Active'? 'text-success':'text-muted' }}">{{ $customer->name }} <span class="small text-muted ml-1">({{ $customer->email }})</span>
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
