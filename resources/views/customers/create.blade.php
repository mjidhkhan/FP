@extends('layouts.layout')


 @section('content')


    <div class="container mt-3">
        <h3 class="title bg-secondary text-white pt-3 pb-3 pl-2">Add New Customers</h3>
		
    <hr>

        <div class="row col-md-12 d-flex justify-content-center">
            <div class="col-md-6 ">
                
                <form action="/customers" method="POST">
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
        
    </div>    <!-- ./container ends -->


@endsection
