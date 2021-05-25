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
            <h6 class="m-0 font-weight-bold text-primary">Offres table</h6>
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
                                <td>{{$offre->objet}}</td>
                                <td>{{$offre->description}}</td>
                                <td>{{$offre->condition}}</td>
                                <td>{{$offre->fascicule}}</td>
                                <td>{{$offre->mantont_du_financement}}</td>
                                <td>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-warning btn-circle" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-danger btn-circle" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
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
