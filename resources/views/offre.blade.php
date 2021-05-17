@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-5 p-2 m-2">
        <div class="row">
            <div class="col-3 offset-1">
                <img src="../assets/images/logo-placeholder.png" class="mx-auto col-12">
                <div class="my-2">
                    <p>0622222222</p>
                    <p>test@gmail.com</p>
                    <p>www.test.com</p>
                    <p>Synergie Media, Immeuble Borj Agadir, Avenue Kadi Ayad, Agadir</p>
                </div>
            </div>
            <div class="col-8 m-auto">
                <h1 class="mb-3">{{$offre->nom_offre}}</h1>
                <h4 class="text-info mb-0">Objet :</h4>
                <p class="mb-3">{{$offre->objet}}</p>
                @if ($offre->condition != null)
                    <h4 class="text-info mb-0">Condition :</h4>
                    <p class="mb-3">{{$offre->condition}}</p>
                @endif 
                <h4 class="text-info mb-0">Description :</h4>
                <p class="mb-3">{{$offre->description}}</p>

                <div class="row">
                    <div class="my-3">
                        <h4 class="text-info ml-2">Organisations :</h4>
                        <div class="row m-1">
                            <div class="card col-3 m-2 ">
                                <div class="card-body">
                                <h5 class="card-title">organisation 1 nom</h5>
                                <a href="#" class="btn btn-primary">Somewhere</a>
                                </div>
                            </div> 
                            <div class="card col-3 m-2">
                                <div class="card-body">
                                <h5 class="card-title">organisation 2 nom</h5>
                                <a href="#" class="btn btn-primary">Somewhere</a>
                                </div>
                            </div> 
                            <div class="card col-3 m-2">
                                <div class="card-body">
                                <h5 class="card-title">organisation 3 nom</h5>
                                <a href="#" class="btn btn-primary">Somewhere</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

