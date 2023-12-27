@extends('adminlte::page')
<title>Memberships</title>
@section('content')
    <h1>List of Memberships</h1>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10 mx-auto">
                <div class="card my-3">
                    <div class="card-header">
                        <h2 class="text-center text-uppercase">Memberships</h2>
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
                                    <td class="d-flex justify-content-center align-items-center"> 
                                        <a href="{{route("sendmail",$membership->id)}}"
                                            class="btn btn-sm btn-warning mx-2">
                                            Notify
                                        </a>
                                        <form id="{{$membership->id}}" action="{{url('/memberdelete',$membership->id)}}" method="post">
                                            @csrf
                                            @method("GET")
                                        </form>
                                        <button onclick="deleteAd({{$membership->id}})"
                                            type="submit" class="btn btn-sm btn-danger">
                                            Cancel
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
                    text: "You won't be able to revert this!",
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
                        'This subscription is safe',
                        'error'
                    )
                }
                })
        }
    </script>   
@endsection