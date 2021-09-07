@extends('layouts.admin')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Organisations</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row d-flex justify-content-between">
                <h5 class=" font-weight-bold text-primary">Organisations table</h5>
                
                <form method="get" class="form-inline">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control m-2" placeholder="Nom\email\adresse...">
                    <button type="submit" class="btn btn-primary btn-user">Chercher</button>
                </form>

                <a href="{{ route('organisation.create') }}" class="btn btn-success btn-icon-split ">
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
                            <th>#</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Tele</th>
                            <th>Adresse</th>
                            <th>Type d'organisation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Tele</th>
                            <th>Adresse</th>
                            <th>Type d'organisation</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($organisations as $organisation)
                             <tr>
                                <td>{{$organisation->id}}</td>
                                <td>{{$organisation->nom_organisation_fr}}</td>
                                <td>{{$organisation->email}}</td>
                                <td>{{$organisation->tel}}</td>
                                <td>{{Str::limit($organisation->adresse_fr, 50)}}</td>
                                <td>{{$organisation->type_d_organisation_fr}}</td>
                                <td>
                                    <div class="my-2"></div>
                                    <a href="{{ route('organisation.edit', ['organisation'=>$organisation->id]) }}" class="btn btn-warning btn-circle" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <div class="my-2"></div>
                                    
                                    @if ( Auth::user()->hasRole('admin'))
                                        <form data-id="{{$organisation->id}}" method="POST" action="{{ route('organisation.destroy', ['organisation' => $organisation->id]) }}" class="button delete-confirm"> 
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                            
                        @endforeach
                       
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $organisations->withQueryString()->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if (count($organisations)>0)

    <script>
            $('.delete-confirm').on('click', function (event) {
                id = $(this).data('id')
                let form = $(this)
            event.preventDefault();
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    form.submit();            }
            });
        });
    </script>
@endif
@endsection
