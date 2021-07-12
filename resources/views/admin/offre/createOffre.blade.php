@extends('layouts.admin')

@section('content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une offre</h1>
        </div>
        <form class="user" action=" {{ route('offre.store') }} " method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nom">Offre nom</label>
                    <input type="text" class="form-control " id="nom" name="nom"  value="{{old('nom')}}">
                    @error('nom')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="fascicule">Fascicule</label>
                    <input type="text" class="form-control " id="fascicule" name="fascicule"  value="{{old('fascicule')}}">
                    @error('fascicule')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="objet">Objet</label>
                <textarea type="text" class="form-control " id="objet" name="objet" rows="4">{{old('objet')}}</textarea>
                @error('objet')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control " id="description" name="description" rows="4">{{old('description')}}</textarea>
                @error('description')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group"> 
                <label for="condition">Condition</label>
                <textarea type="text" class="form-control " id="condition" name="condition" rows="4">{{old('condition')}}</textarea>
                @error('condition')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="mantont">Mantont du financement</label>
                    <input type="number" class="form-control " id="mantont" min="0" name="mantont"  value="{{old('mantont')}}">
                    @error('mantont')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="row my-2">
                    <label for="profils" class="col-2">Profils</label>
                    <div class="col-9">
                        <select class="js-example-basic-multiple col-12" name="profils[]" multiple="multiple" id="profils"  >
                            @foreach ($profils as $profil)
                                <option value="{{ $profil->id }}">{{ $profil->nom_profil }}</option>
                            @endforeach
                        </select>
                        @error('profils')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </select>
                        @error('profils.*')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
                
                <div class="row my-2">
                    <label for="cycles" class="col-2">Cycles de vie</label>
                    <div class="col-9">
                        <select class="js-example-basic-multiple col-12" name="cycles[]" multiple="multiple" id="cycles"  value="{{old('cycles[]')}}">
                            @foreach ($cycles as $cycle)
                                <option value="{{ $cycle->id }}">{{ $cycle->nom_cycle }}</option>
                            @endforeach
                        </select>
                        @error('cycles')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </select>
                        @error('cycles.*')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="row my-2">
                    <label for="besoins" class="col-2">Besoins</label>
                    <div class="col-9">
                        <select class="js-example-basic-multiple col-12" name="besoins[]" multiple="multiple" id="besoins"  value="{{old('besoins[]')}}">
                            @foreach ($besoins as $besoin)
                                <option value="{{ $besoin->id }}">{{ $besoin->nom_besoin }}</option>
                            @endforeach
                        </select>
                        @error('besoins')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </select>
                        @error('besoins.*')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="row my-2">
                    <label for="organisations" class="col-2">Organisations</label>
                    <div class="col-9">
                        <select class="js-example-basic-multiple col-12" name="organisations[]" multiple="multiple" id="organisations"  value="{{old('organisations[]')}}">
                            @foreach ($organisations as $organisation)
                                <option value="{{ $organisation->id }}">{{ $organisation->nom_organisation_fr }}</option>
                            @endforeach
                        </select>
                        @error('organisations')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </select>
                        @error('organisations.*')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Ajouter
            </button>
            
        </form>
        
    </div>


@endsection

@section('script')
      
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            
            $('#profils').val( @json(old('profils')) );
            $('#profils').trigger('change');
            
            $('#cycles').val( @json(old('cycles')) );
            $('#cycles').trigger('change');
            
            $('#besoins').val( @json(old('besoins')) );
            $('#besoins').trigger('change');
            
            $('#organisations').val( @json(old('organisations')) );
            $('#organisations').trigger('change');
        });
    </script>
@endsection