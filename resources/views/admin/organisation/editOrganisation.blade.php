@extends('layouts.admin')

@section('content')
    <div class="p-5" >
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une Organisation</h1>
        </div>
        <form class="user" action=" {{ route('organisation.update', ['organisation'=>$organisation->id]) }} " method="POST">
            @csrf
            <div class="form-group d-flex justify-content-center">
                <div class="col-6  mb-3 mb-sm-0">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control " id="nom" name="nom"  value="{{old('nom', $organisation->nom_organisation)}}">
                    @error('nom')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-6  mb-3 mb-sm-0">
                    <label for="fascicule">Email</label>
                    <input type="email" class="form-control " id="email" name="email"  value="{{old('email', $organisation->email)}}">
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-6  mb-3 mb-sm-0">
                    <label for="fascicule">Telephone</label>
                    <input type="text" class="form-control " id="tel" name="tel"  value="{{old('tel', $organisation->tel)}}">
                    @error('tel')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-6  mb-3 mb-sm-0">
                    <label for="fascicule">Adresse</label>
                    <input type="text" class="form-control " id="adresse" name="adresse"  value="{{old('adresse', $organisation->adresse)}}">
                    @error('adresse')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="col-6  mb-3 mb-sm-0">
                    <label for="fascicule">Web site</label>
                    <input type="text" class="form-control " id="web_site" name="web_site"  value="{{old('web_site', $organisation->web_site)}}">
                    @error('web_site')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group d-flex justify-content-center">
                <div class="col-6  mb-3 mb-sm-0">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Mise à jour
                    </button>
                </div>
            </div>
        </form>
        
    </div>


@endsection
