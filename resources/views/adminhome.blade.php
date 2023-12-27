@extends('adminlte::page')
<title>Admin Home</title>
@section('content')
    <div class="container">
            <div class="row my-1">
                <div class="col-sm-5 col-md-4">
                            <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{\App\Models\User::count()}}</h3>
                                        <p>Users</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <a href="{{url('/users')}}" class="small-box-footer">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                </div>
                <div class="col-sm-5 col-md-4">
                            <div class="small-box bg-secondary">
                                    <div class="inner">
                                        <h3>{{\App\Models\payment::count('pack')}}</h3>
                                        <p>Sold Packs</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-database"></i>
                                    </div>
                                    <a href="{{url('/packs')}}" class="small-box-footer">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                    </div>
                            </div>
                </div>
                <!--<div class="col-sm-5 col-md-4">
                            <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>{{\App\Models\client::count()}}</h3>
                                        <p>Clients</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <a href="{{url('/clients')}}" class="small-box-footer">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                    </div>
                            </div>
                </div>
                <div class="col-sm-5 col-md-4">
                            <div class="small-box bg-primary">
                                    <div class="inner">
                                        <h3>{{\App\Models\client::count()}}</h3>
                                        <p>Memberships</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-solid fa-calendar-check"></i>
                                    </div>
                                    <a href="{{url('/memberships')}}" class="small-box-footer">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                    </div>
                            </div>
                </div>-->
                <div class="col-sm-5 col-md-4">
                            <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>{{\App\Models\payment::count()}}</h3>
                                        <p>Payments</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-money-bill"></i>
                                    </div>
                                    <a href="{{url('/payments')}}" class="small-box-footer">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                    </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection