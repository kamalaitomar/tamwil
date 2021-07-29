@extends('layouts.admin')

@section('content')
    <div class="p-5" >
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">{{$organisation->nom_organisation_fr}}</h1>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#fr" role="tab" aria-controls="fr" aria-selected="true">Francais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ar" role="tab" aria-controls="ar" aria-selected="false">Arabe</a>
            </li>
        </ul>
        <div class="tab-content m-3" id="myTabContent">
            <div class="tab-pane fade show active" id="fr" role="tabpanel" aria-labelledby="home-tab">
                <form class="user" action=" {{ route('organisation.update', ['organisation'=>$organisation->id]) }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control " id="nom" name="nom"  value="{{old('nom', $organisation->nom_organisation_fr)}}">
                            @error('nom')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="email">Email</label>
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
                            <label for="tel">Telephone</label>
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
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control " id="adresse" name="adresse"  value="{{old('adresse', $organisation->adresse_fr)}}">
                            @error('adresse')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="web_site">Web site</label>
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
                            <label for="type">Type d'organisation</label>
                            <input type="text" class="form-control " id="type" name="type"  value="{{old('type', $organisation->type_d_organisation_fr)}}">
                            @error('type')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="presentation">Presentation</label>
                            <textarea type="text" class="form-control " id="presentation" name="presentation" rows="10" >{{old('presentation', $organisation->presentation_fr)}}</textarea>
                            @error('presentation')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="logo">Logo nom</label>
                            <input type="text" class="form-control " id="logo" name="logo"  value="{{old('logo', $organisation->icone)}}">
                            @error('logo')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="logofile">Logo</label>
                            <input type="file" class="form-control " id="logofile" name="logofile"  value="{{old('logofile')}}">
                            @error('logofile')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="besoins">Types de financement</label>
                            <div class="">
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
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <div class="alert alert-warning" role="alert">veuillez remplir la suite des informations en arabe aussi</div>
                        </div>
                    </div>
            </div>
            <div class="tab-pane fade text-right" id="ar" role="tabpanel" aria-labelledby="nav-profile-tab" dir="rtl"> 
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="nom_ar">الاسم</label>
                            <input type="text" class="form-control " id="nom_ar" name="nom_ar"  value="{{old('nom_ar', $organisation->nom_organisation_ar)}}">
                            @error('nom_ar')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="adresse_ar">العنوان</label>
                            <input type="text" class="form-control " id="adresse_ar" name="adresse_ar"  value="{{old('adresse_ar', $organisation->adresse_ar)}}">
                            @error('adresse_ar')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="type_ar">نوع المنظمة</label>
                            <input type="text" class="form-control " id="type_ar" name="type_ar"  value="{{old('type_ar', $organisation->type_d_organisation_ar)}}">
                            @error('type_ar')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="presentation_ar">التقديم</label>
                            <textarea type="text" class="form-control " id="presentation_ar" name="presentation_ar" rows="10" >{{old('presentation_ar', $organisation->presentation_ar)}}</textarea>
                            @error('presentation_ar')
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
        </div>
       
        
    </div>


@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        
        $('#besoins').val( @json($organisationbesoin) );
            $('#besoins').trigger('change');
    });
</script>

@endsection

