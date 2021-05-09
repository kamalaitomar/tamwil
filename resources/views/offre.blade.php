@extends('layouts.app')

@section('content')
<div class="m-5">
    <div class="row">
        <img src="../assets/images/icon.png" class="col-3">
        <div class="col-8">
            <h1>{{$offre->nom_offre}}</h1>
            <h1>{{$offre->objet}}</h1>
            <h1>{{$offre->Conditions}}</h1>
        </div>
    </div>
    <h1>{{$offre->description}}</h1>
</div>

@endsection

