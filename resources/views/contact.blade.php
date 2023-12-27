@extends('adminlte::page')
<title>Notify</title>
@section('content')
<div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase fw-bold">
                            <h4>Notify Client Client</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/sendmail')}}" method="post"class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="email" value="{{$payment->email}}" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="subject">subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="subject" autocomplete="off" >
                            </div>
                            <div class="form-group mb-3">
                                <textarea name="content" id="" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection