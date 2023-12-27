@extends('adminlte::page')

@section('title')
    Show client
@endsection
@section('content')
    <div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase fw-bold">
                            <h3>{{$client->name}}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="id">ID</label>
                                <input type="text" class="form-control" disabled name="registration_number" maxlength="8" placeholder="id" value="{{$client->id}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Fullname</label>
                                <input type="text" class="form-control" disabled name="name" placeholder="name" value="{{$client->name}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" disabled name="phone" placeholder="phone" value="{{$client->phone}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="date" class="form-control" disabled name="email" placeholder="email" value="{{$client->email}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="starting_date">Starting Date</label>
                                <input type="text" class="form-control" disabled name="starting_date" placeholder="starting_date" value="{{$client->starting_date}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="ending_date">Ending Date</label>
                                <input type="text" class="form-control" disabled name="ending_date" placeholder="ending_date" value="{{$client->ending_date}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="cvc">Card Number</label>
                                <input type="tel" class="form-control" disabled name="cvc" placeholder="cvc" value="{{$client->cvc}}">
                            </div>
                            <div class="mt-2 py-2 text-center text-uppercase fw-bold">
                            <a href="" class="btn btn-danger btn-block">Bill Request</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
