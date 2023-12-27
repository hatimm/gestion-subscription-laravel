@extends('layouts.navbar')
<title>client data</title>
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-19 mx-auto">
                <div class="card my-3">
                    <div class="card-header">
                        <h2 class="text-center text-uppercase">Authentification data</h2>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{Auth::user()->email}}</td>
                                    <td>{{Auth::user()->password}}</td>
                                    <td>
                                    <a href="userdataedit" class="btn btn-sm btn-warning mx-2">Update</a>
                                    <a href="{{ route('userdatadelete', Auth::user()->id) }}" class="btn btn-sm btn-danger ">Delete</a>
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
@endsection