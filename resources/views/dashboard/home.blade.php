@extends('layouts/dashboard/main')

@section('seccion')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        <i class="fas fa-key"></i> Your API Access Key
                    </h3>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" value="{{$userData->access_key}}" readonly>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-body">
                    <h1>Your Account</h1>
                    <div class="card">
               
                        <div class="card-body">
                            <span>Name : {{$userData->name}} </span>
                            <br>
                            <span>Email : {{$userData->email}} </span>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
