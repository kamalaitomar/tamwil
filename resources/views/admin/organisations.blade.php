@extends('layouts.admin')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Organisations</h1>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h5 class=" font-weight-bold text-primary col-9">Organisations table</h5>
            
                <a href="#" class="btn btn-success btn-icon-split ">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter une organisation</span>
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
                            <th>Email</th>
                            <th>Tele</th>
                            <th>Adresse</th>
                            <th>Web-site</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Tele</th>
                            <th>Adresse</th>
                            <th>Web-site</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($organisations as $organisation)
                             <tr>
                                <td>{{$organisation->id}}</td>
                                <td>{{$organisation->nom_organisation}}</td>
                                <td>{{$organisation->email}}</td>
                                <td>{{$organisation->tel}}</td>
                                <td>{{$organisation->adresse}}</td>
                                <td>{{$organisation->web_site}}</td>
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
                    {!! $organisations->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
