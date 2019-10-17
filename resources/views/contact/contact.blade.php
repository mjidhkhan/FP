@extends('layouts.layout')


 @section('content')
 <div class="container mt-3">
    <h3 class="title">Contact Us</h3>
     <hr>
    <div class="section col-6">
        <h6 class="text-danger">Have any query? Send us a message.</h6>
        <hr>
        <form>
            <div class="form-group">
                <label for="name">Customer Name</label>
                <input type="text" class="form-control " name="name" placeholder="Enter Customer Name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" name='email' placeholder="Enter email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3"> {{ old('message') }}</textarea>
            </div>
             <button type="submit" class="btn btn-outline-primary btn-sm float-right">Send Message </button>
        </form>
    </div>
 </div>
@endsection
