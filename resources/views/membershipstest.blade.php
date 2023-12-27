@extends('adminlte::page')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        MEMBERSHIPS
                    </h3>
                </div>
                <div class="card-body text-center">
                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <a href="calendar"
                                class="btn btn-outline-dark">
                                Memberships Calendar
                            </a>
                            <a href="membershipscrud"
                                class="btn btn-outline-danger">
                                Memberships Status
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection