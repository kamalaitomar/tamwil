@extends('layouts.admin')

@section('content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une Offre!</h1>
        </div>
        <form class="user">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="nom"
                        placeholder="Offre nom">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="fascicule"
                        placeholder="Fascicule">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="objet"
                    placeholder="Objet">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="description"
                    placeholder="Description">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="condition"
                    placeholder="Condition">
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user"
                        id="mantont" placeholder="Mantont du financement">
                </div>
            </div>
            <div class="form-group row d-flex justify-content-center">

                <ul class="list-group list-group-flush">
                    <p class="font-weight-bold">Profil</p>
                    @foreach ($profils as $profil)
                        <li class="list-group-item">
                            <!-- Default checked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="profil_{{ $profil->id }}" >
                                <label class="custom-control-label" for="profil_{{ $profil->id }}">{{ $profil->nom_profil }} </label>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <ul class="list-group list-group-flush mx-1">
                    <p class="font-weight-bold">Cycle de vie</p>
                    @foreach ($cycles as $cycle)
                        <li class="list-group-item">
                            <!-- Default checked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cycle_{{ $cycle->id }}">
                                <label class="custom-control-label" for="cycle_{{ $cycle->id }}">{{ $cycle->nom_cycle }} </label>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <ul class="list-group list-group-flush ">
                    <p class="font-weight-bold">Besoin</p>
                    @foreach ($besoins as $besoin)
                        <li class="list-group-item">
                            <!-- Default checked -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="besoin_{{ $besoin->id }}">
                                <label class="custom-control-label" for="besoin_{{ $besoin->id }}">{{ $besoin->nom_besoin }} </label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <a href="login.html" class="btn btn-primary btn-user btn-block">
                Ajouter
            </a>
            
        </form>
        
    </div>
    
@endsection