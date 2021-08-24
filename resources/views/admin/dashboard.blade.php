@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">

    <a href="{{ route('offre.create') }}" class="btn btn-success btn-icon-split m-2">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Ajouter une offre</span>
    </a>
    <a href="{{ route('organisation.create') }}" class="btn btn-success btn-icon-split m-2">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Ajouter une organisation</span>
    </a>
    <a href="{{ route('article.create') }}" class="btn btn-success btn-icon-split m-2">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Ajouter un article</span>
    </a>
</div>
<div class="row">
    <div class="card border-left-primary shadow h-100 py-2 mx-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Totale d'offres</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $offretotal}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-left-primary shadow h-100 py-2 mx-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Totale d'organisations</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $organisationtotal}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection