@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">
    <a href="{{ route('organisation.create') }}" class="btn btn-success btn-icon-split m-2">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Ajouter une organisation</span>
    </a>

    <a href="{{ route('offre.create') }}" class="btn btn-success btn-icon-split m-2">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Ajouter une offre</span>
    </a>
</div>
    
@endsection