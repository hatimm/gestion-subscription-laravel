@extends('layouts.navbar')
<title>Client Space</title>
@section('content')
<!--<table>
    <thead>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Type</td>
    </thead>
    <tbody>
        <td>{{Auth::user()->id}}</td>
        <td>{{Auth::user()->name}}</td>
        <td>{{Auth::user()->email}}</td>
        <td>{{Auth::user()->type}}</td>
    </tbody>
</table>-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Hello {{Auth::user()->name}} , These are your options
                    </h3>
                </div>
                <div class="card-body text-center">
                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <a href="clientauthtable"
                                class="btn btn-outline-dark">
                                Authentification data
                            </a>
                            <a href="clienthome"
                                class="btn btn-outline-primary">
                                View Packs
                            </a>
                            <a href="{{route('paymentstatus', Auth::user()->name)}}"
                                class="btn btn-outline-success">
                                Payment Status
                            </a>
                            <a href="{{route('bill', Auth::user()->name)}}"
                                class="btn btn-outline-warning">
                                Bill Request
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection