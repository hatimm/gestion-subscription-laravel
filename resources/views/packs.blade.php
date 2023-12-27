@extends('adminlte::page')
<title>Packs</title>
@section('content')
    <h1>List of Packs</h1>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10 mx-auto">
                <div class="card my-3">
                    <div class="card-header">
                        <h2 class="text-center text-uppercase">Packs</h2>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Nombre_Domaine</th>
                                    <th>Espace_Disque</th>
                                    <th>Boite_Email</th>
                                    <th>Prix</th>
                                    <th>Solde</th>
                                    <!--<th></th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pack as $key => $pack)
                                <tr>
                                    <td>{{$pack->id}}</td>
                                    <td>{{$pack->nom}}</td>
                                    <td>{{$pack->domain}}</td>
                                    <td>{{$pack->espace_disque}}</td>
                                    <td>{{$pack->boite_email}}</td>
                                    <td>{{$pack->prix}}</td>
                                    <td>{{DB::table('payments')->where('pack', '=', $pack->nom)->count();}}</td>
                                    <!--<td class="d-flex justify-content-center align-items-center">
                                        <a href="{{url('/packshow',$pack->id)}}" class="btn btn-sm btn-primary "><i class="fas fa-eye"></i></a>
                                        <a href="{{url('/packedit',$pack->id)}}" class="btn btn-sm btn-warning mx-2"><i class="fas fa-edit"></i></a>
                                        <form id="{{$pack->id}}" action="{{url('/packdelete',$pack->id)}}" method="post">
                                            @csrf
                                            @method("GET")
                                        </form>
                                        <button onclick="deleteAd({{$pack->id}})"
                                            type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>-->
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
        <<!--<script>
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
                    text: "You want to delete this pack!",
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
                        'pack non deleted',
                        'error'
                    )
                }
                })
        }
    </script>-->
@endsection