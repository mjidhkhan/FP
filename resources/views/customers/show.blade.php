@extends('layouts.app')
@section('title', 'Detaile for '. $customer->name)


 @section('content')
 <div class="container mt-3">
        <h3 class="title">Details of {{ $customer->name }} </h3>
    <hr>
	 <div class="row">
		 <div class="col-md-6">
                <ul class="list-group ">
                    <li class="list-group-item border  {{ $customer->active === 'Active'? 'border-success text-success':'text-muted' }}">{{ $customer->name }} <span class="float-right small"> {{ $customer->active }}</span>
                        <p class="small text-muted">{{ $customer->email }}</p>
                        <p class="small text-muted">{{ $customer->company->name }}
							 <span class="text-muted ml-4">P: {{ $customer->company->phone }} </span>
						</p>
                        <div class="">
							<a href="/customers/{{ $customer->id }}/edit" class="btn btn-link fa fa-edit text-info float-right">Edit</a>
                                <form action="/customers/{{ $customer->id  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class=" btn btn-link fa fa-trash  text-danger float-right">Delete</button>
                                </form>

                        </div>
                    </li>
                </ul>
            </div>
	 </div>
 </div>
 @endsection
