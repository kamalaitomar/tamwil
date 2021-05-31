@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Offres</h1>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h5 class=" font-weight-bold text-primary col-9">Offres table</h5>
            
                <a href=" {{ route('offre.create') }} " class="btn btn-success btn-icon-split ml-5">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter une offre</span>
                </a>
            </div>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Objet</th>
                            <th>Description</th>
                            <th>Condition</th>
                            <th>Fascicule</th>
                            <th>Mantont du financement</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Objet</th>
                            <th>Description</th>
                            <th>Condition</th>
                            <th>Fascicule</th>
                            <th>Mantont du financement</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($offres as $offre)
                             <tr>
                                <td>{{$offre->id}}</td>
                                <td>{{$offre->nom_offre}}</td>
                                <td>{{ Str::limit($offre->objet, 50)}}</td>
                                <td>{{ Str::limit($offre->description, 50)}}</td>
                                <td>{{ Str::limit($offre->condition, 50)}}</td>
                                <td>{{$offre->fascicule}}</td>
                                <td>{{$offre->mantont_du_financement}}</td>
                                <td>
                                    <div class="my-2"></div>
                                    <a href=" {{ route('offre.edit', ['offre'=>$offre->id]) }} " class="btn btn-warning btn-circle" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <div class="my-2"></div>

                                    <form method="POST" action="{{ route('offre.destroy', ['offre' => $offre->id]) }}" class="button delete-confirm"> 
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $offres->links() !!}
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
        $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = " {{ route('offre.destroy', ['offre'=>$offre->id]) }} ";
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                $('.delete-confirm').submit();            }
        });
    });
</script>
@endsection
