@extends('layouts.navbar')
@section('content')
<div class="container">
        <div class="row my-5">
            <div class="col-md-10 mx-auto">
                <div class="card my-3">
                    <div class="card-header">
                        <h2 class="text-center text-uppercase">Membership Status</h2>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Starting Date</th>
                                    <th>Ending Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($membership as $key => $membership)
                                <tr>
                                    <td>{{$membership->id}}</td>
                                    <td>{{$membership->name}}</td>
                                    <td>{{$membership->starting_date}}</td>
                                    <td>{{$membership->ending_date}}</td>
                                    <td>
                                        @if($membership->status == 1)
                                            <a href="" class="btn btn-success">Valid</a>
                                        @else 
                                            <a href="" class="btn btn-danger">Expired</a>
                                        @endif
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection