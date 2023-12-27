@extends('adminlte::page')

    <title> Update Client </title>

@section('content')
    <div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-2">
                    <div class="card-header">
                        <div class="text-center text-uppercase fw-bold">
                            <h4>Update Client</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clientedit', $client->id) }}" method="post" enctype="multipart/form-data" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="id">ID</label>
                                <input type="numeric" class="form-control" name="id" placeholder="id" value="{{old('id',$client->id)}}" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Fullname</label>
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{old('name',$client->name)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="email" value="{{old('email',$client->email)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{old('phone',$client->Phone)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="status">status</label>
                                <select name="status">
                                    <option value="{{old('status',$client->status)}}">1</option>
                                    <option value="0">0</option>
                                    <!--<input type="integer" class="form-control" name="status" placeholder="status" value="{{old('status',$client->status)}}">-->
                                </select>
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
