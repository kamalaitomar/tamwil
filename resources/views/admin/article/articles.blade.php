@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Articles</h1>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row d-flex justify-content-between">
                <h5 class=" font-weight-bold text-primary col-9">Articles table</h5>
            
                <a href=" {{ route('article.create') }} " class="btn btn-success btn-icon-split ml-5">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter un article</span>
                </a>
            </div>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($articles as $article)
                             <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title_fr}}</td>
                                <td>
                                    <div class="my-2"></div>
                                    <a href=" {{ route('article.edit', ['article'=>$article->id]) }} " class="btn btn-warning btn-circle" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <div class="my-2"></div>
                                    
                                    @if ( Auth::user()->hasRole('admin'))
                                        <form method="POST" action="{{ route('article.destroy', ['article' => $article->id]) }}" class="button delete-confirm"> 
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
                    {!! $articles->links() !!}
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if (count($articles)>0)
    <script>
            $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
                const url = " {{ route('article.destroy', ['article'=>$article->id]) }} ";
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    $('.delete-confirm').submit();            
                    }
            });
        });
            
    </script>
@endif
@endsection
