@extends('layouts.navbar')
   <title>Payment Renew</title>
@section('content')
    <div class="container">
    @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="text-center text-uppercase fw-bold">
                            <h4>Payment Renew</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('paymentupdate',$payment->id)}}" method="post" enctype="multipart/form-data" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="name">Fullname</label>
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{Auth::user()->name}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="email" value="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="cvc">Card Number</label>
                                <input cvc="text" class="form-control" name="cvc" placeholder="cvc" value="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="cvc">Start Date</label>
                                <input type="text" id="tdate" class="form-control" name="starting_date" placeholder="Starting Date"  >
                            </div>
                            <div class="form-group mb-3">
                                <label for="cvc">End Date</label>
                                <input type="text" id="Edate" class="form-control" name="ending_date" placeholder="Ending Date"  >
                            </div>
                            <div class="form-group mb-3">
                                <label for="status">status</label>
                                <input type="integer" class="form-control" name="status" placeholder="status" value="1" readonly hidden >
                            </div>
                            <div class="form-row">
                                    <div class="col">
                                        <label class='control-label'>CVV</label> 
                                        <input autocomplete='off' name="cvv" class='form-control'
                                        placeholder='CVV' size='4' type='text'>
                                    </div>
                                    <div class="col">
                                        <label class='control-label'>Expiration</label>
                                        <input autocomplete='off' name="mm" class='form-control'
                                        placeholder='Expiration Month MM' size='4' type='text'>
                                    </div>
                                    <div class="col">
                                        <label class='control-label'>YEAR</label>
                                        <input autocomplete='off' name="yyy" class='form-control'
                                        placeholder='Expiration Year YYYY' size='4' type='text'>
                                    </div>
                              </div>
                                
                            <div class="form-group py-4  mb-3">
                                <button type="submit" class="btn btn-primary btn-block">Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1;
      var yyyy = today.getFullYear();
      var test = dd+'-'+mm+'-'+yyyy;
      var end = dd+'-'+mm+'-'+(yyyy+1);
      window.onload = function(){
      document.getElementById("tdate").value = test;
      document.getElementById("Edate").value = end;
    }
    </script>
@endsection
