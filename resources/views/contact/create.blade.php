@extends('layouts.app')


 @section('content')
 <div class="container mt-3">
    <h3 class="title">Contact Us</h3>
     <hr>
    <div class="section col-6">
        <h6 class="text-success">Have any query? Send us a message.</h6>
        @include('message')
        <hr>
        <form action="/contact" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control " name="name"  value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input type="text" class="form-control" name='email'  value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3"> {{ old('message') }}</textarea>
                 @error('name')
                    <p class="text-danger">{{ $errors->first('message') }}</p>
                @enderror
            </div>
             <button type="submit" class="btn btn-outline-primary btn-sm float-right">Send Message </button>
        </form>
    </div>
 </div>
@endsection
