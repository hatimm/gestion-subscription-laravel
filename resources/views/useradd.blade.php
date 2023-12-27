@extends('adminlte::page')


   <title>Add new user</title>

    
@section('content')
<h1>Add new user</h1>
    <div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="text-center text-uppercase fw-bold">
                            <h4>Add new user</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('userstore')}}" method="post" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{old('name')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">password</label>
                                <input type="text" class="form-control" name="password" placeholder="password" value="{{old('password')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="type">type</label>
                                <input type="text" class="form-control" name="type" placeholder="type" value="{{old('type')}}">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
