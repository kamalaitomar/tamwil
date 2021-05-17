@extends('layouts.admin')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Organisations</h1>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Organisations table</h6>
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
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
