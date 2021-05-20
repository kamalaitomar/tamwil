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
                            <th>mantont du financement</th>
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
                            <th>mantont du financement</th>
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
                                <td>{{$offre->montont_du_financemet}}</td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
