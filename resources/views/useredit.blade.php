@extends('adminlte::page')

    <title> Update User </title>

@section('content')
    <div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase fw-bold">
                            <h4>Update User</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('useredit', $user->id) }}" method="post" enctype="multipart/form-data" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="id">ID</label>
                                <input type="numeric" class="form-control" name="id" placeholder="id" value="{{old('id',$user->id)}}" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{old('name',$user->name)}}" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="email" value="{{old('email',$user->email)}}" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" name="type" placeholder="type" value="{{old('type',$user->type)}}">
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
