@extends('adminlte::page')
@section('plugins.Datatables', true)
<title>Users</title>
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10 mx-auto">
                <div class="card my-3">
                    <div class="card-header">
                        <h2 class="text-center text-uppercase">Users</h2>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->type}}</td>
                                    <td class="d-flex justify-content-center ">
                                        <a href="{{url('/useredit',$user->id)}}" class="btn btn-sm btn-warning mx-2"><i class="fas fa-edit"></i></a>
                                        <form id="{{$user->id}}" action="{{url('/userdelete',$user->id)}}" method="post">
                                            @csrf
                                            @method("GET")
                                        </form>
                                        <button onclick="deleteAd({{$user->id}})"
                                            type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
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
@section('js')
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
                    ]
                });
            });
        </script>   
        @if(session()->has("success"))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif
    <script>
        function deleteAd(id){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You want to delte this user!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'User non deleted',
                        'error'
                    )
                }
                })
        }
    </script>
@endsection
