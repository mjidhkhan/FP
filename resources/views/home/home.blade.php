@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-info">
                        <h5>Vue UI/UX</h5>
                         <my-button type="type"  text="My new botton "></my-button>
                         <my-message></my-message>
                    </div>
                   
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
