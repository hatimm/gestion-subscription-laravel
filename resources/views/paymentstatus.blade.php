@extends('layouts.navbar')
<title>Payment Status</title>
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-19 mx-auto">
                <div class="card my-3">
                    <div class="card-header">
                        <h2 class="text-center text-uppercase">Payment Status</h2>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Pack</th>
                                    <th>starting_date</th>
                                    <th>ending_date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($payment as $key => $payment)
                                <tr>
                                    <td>{{$payment->name}}</td>
                                    <td>{{$payment->Price}}</td>
                                    <td>{{$payment->Pack}}</td>
                                    <td>{{$payment->starting_date}}</td>
                                    <td>{{$payment->ending_date}}</td>
                                    <td>
                                        @if($payment->status == 1)
                                            <a href="" class="btn btn-success">Valid</a>
                                        @else 
                                            <a href="" class="btn btn-danger">Terminated</a>
                                        @endif
                                    </td>
                                    <td>
                                    <a href="{{url('/paymentedit',$payment->id)}}" class="btn btn-sm btn-warning mx-2">Renew</a>
                                    <a href="{{ route('paymentterminate', $payment->id) }}" class="btn btn-sm btn-danger ">Terminate</a>
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