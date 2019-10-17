@extends('layouts.layout')


 @section('content')


    <div class="container mt-5">
        <h3 class="title">Customer {{ $customer->name }}</h3>
    <hr>

        <div class="row">
            <div class="col-md-4 ">
                <h5 class=" {{ $customer->active === 'Active'? 'bg-success ':'bg-secondary ' }}text-white pt-3 pb-3 pl-2">Edit Record</h5>
                <hr class="mb-3">
                <form action="/customers/{{ $customer->id }}" method="POST">
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
                        
                    </div>
                    <div class="form-group">
                        @if($customer->active==='Active')
                         <label for="active">Customer Status </label>
                         <p class="text-success float-right">Active</p>
                        @else
                        <label for="active">Customer Status </label>
                        <p class="text-danger float-right">Inactive</p>
                        @endif
                       
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

                    <button type="submit" class="btn btn-outline-dark btn-sm float-right">Update Customer </button>
                </form>
            </div>

        </div>
    </div>


@endsection
