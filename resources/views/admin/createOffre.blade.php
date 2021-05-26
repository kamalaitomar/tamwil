@extends('layouts.admin')

@section('content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une Offre!</h1>
        </div>
        <form class="user" action=" {{ route('offre.store') }} " method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nom">Offre nom</label>
                    <input type="text" class="form-control form-control-user" id="nom" name="nom">
                </div>
                <div class="col-sm-6">
                    <label for="fascicule">Fascicule</label>
                    <input type="text" class="form-control form-control-user" id="fascicule" name="fascicule">
                </div>
            </div>
            <div class="form-group">
                <label for="objet">Objet</label>
                <textarea type="text" class="form-control form-control-user" id="objet" name="objet"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control form-control-user" id="description" name="description"></textarea>
            </div>
            <div class="form-group"> 
                <label for="condition">Condition</label>
                <textarea type="text" class="form-control form-control-user" id="condition" name="condition"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="mantont">Mantont du financement</label>
                    <input type="number" class="form-control form-control-user" id="mantont" min="0" name="mantont"> 
                </div>
            </div>
            <div class="form-group">
                <div class="row my-2">
                    <label for="profils" class="col-2">Profils</label>
                    <select class="js-example-basic-multiple col-9 form-control " name="profils[]" multiple="multiple" id="profils">
                        @foreach ($profils as $profil)
                            <option value="{{ $profil->id }}">{{ $profil->nom_profil }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="row my-2">
                    <label for="cycles" class="col-2">Cycles de vie</label>
                    <select class="js-example-basic-multiple col-9" name="cycles[]" multiple="multiple" id="cycles">
                        @foreach ($cycles as $cycle)
                            <option value="{{ $cycle->id }}">{{ $cycle->nom_cycle }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="row my-2">
                    <label for="besoins" class="col-2">Besoins</label>
                    <select class="js-example-basic-multiple col-9" name="besoins[]" multiple="multiple" id="besoins">
                        @foreach ($besoins as $besoin)
                            <option value="{{ $besoin->id }}">{{ $besoin->nom_besoin }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="row my-2">
                    <label for="organisations" class="col-2">Organisations</label>
                    <select class="js-example-basic-multiple col-9" name="cycles[]" multiple="multiple" id="organisations">
                        @foreach ($organisations as $organisation)
                            <option value="{{ $organisation->id }}">{{ $organisation->nom_organisation }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Ajouter
            </button>
            
        </form>
        
    </div>
    
@endsection