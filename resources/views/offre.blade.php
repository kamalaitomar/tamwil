@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-white p-2">
        <div class="row">
            <div class="col-2 offset-1">
                <img src="../assets/images/icon.png" class="mx-auto col-12">
                <div class="my-3">
                    <p><span class="text-info">Tele : </span>0622222222</p>
                    <p><span class="text-info">Email : </span>test@gmail.com</p>
                    <p><span class="text-info">Adresse : </span>Synergie Media, Immeuble Borj Agadir, Avenue Kadi Ayad, Agadir</p>
                </div>
            </div>
            <div class="col-8 my-auto">
                <p class="text-info mb-0">Nom :</p>
                <h4 class="md-3">{{$offre->nom_offre}}</h4>
                <p class="text-info mb-0">Objet :</p>
                <p class="mb-3">{{$offre->objet}}</p>
                @if ($offre->condition != null)
                    <p class="text-info mb-0">Condition :</p>
                    <p class="mb-3">{{$offre->condition}}</p>
                @endif 
                <p class="text-info mb-0">Description :</p>
                <p class="mb-0">{{$offre->description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 my-3">
                <h4 class="text-info">Organisations :</h4>
                <div class="row m-1">
                    <div class="card col-3 m-1">
                        <div class="card-body">
                        <h5 class="card-title">organisation 1 nom</h5>
                        <a href="#" class="btn btn-primary">Somewhere</a>
                        </div>
                    </div> 
                    <div class="card col-3 m-1">
                        <div class="card-body">
                        <h5 class="card-title">organisation 2 nom</h5>
                        <a href="#" class="btn btn-primary">Somewhere</a>
                        </div>
                    </div> 
                    <div class="card col-3 m-1">
                        <div class="card-body">
                        <h5 class="card-title">organisation 3 nom</h5>
                        <a href="#" class="btn btn-primary">Somewhere</a>
                        </div>
                    </div> 
                    <div class="card col-3 m-1">
                        <div class="card-body">
                        <h5 class="card-title">organisation 4 nom</h5>
                        <a href="#" class="btn btn-primary">Somewhere</a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-6">

            </div>
        </div>
    </div>
</div>

@endsection

