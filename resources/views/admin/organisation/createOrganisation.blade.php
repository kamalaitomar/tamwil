@extends('layouts.admin')

@section('content')
    <div class="p-5" >
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une organisation</h1>
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
                <form class="user" action=" {{ route('organisation.store') }} " method="POST">
                    @csrf
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control " id="nom" name="nom"  value="{{old('nom')}}">
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
                            <input type="email" class="form-control " id="email" name="email"  value="{{old('email')}}">
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
                            <input type="text" class="form-control " id="tel" name="tel"  value="{{old('tel')}}">
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
                            <input type="text" class="form-control " id="adresse" name="adresse"  value="{{old('adresse')}}">
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
                            <input type="text" class="form-control " id="web_site" name="web_site"  value="{{old('web_site')}}">
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
                            <input type="text" class="form-control " id="type" name="type"  value="{{old('type')}}">
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
                            <textarea type="text" class="form-control " id="presentation" name="presentation" rows="5" >{{old('presentation')}}</textarea>
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
                            <input type="text" class="form-control " id="logo" name="logo"  value="{{old('logo')}}">
                            @error('logo')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                            <input type="text" class="form-control " id="nom_ar" name="nom_ar"  value="{{old('nom_ar')}}">
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
                            <input type="text" class="form-control " id="adresse_ar" name="adresse_ar"  value="{{old('adresse_ar')}}">
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
                            <input type="text" class="form-control " id="type_ar" name="type_ar"  value="{{old('type_ar')}}">
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
                            <textarea type="text" class="form-control " id="presentation_ar" name="presentation_ar" rows="5" >{{old('presentation_ar',)}}</textarea>
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
                                Ajouter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>


@endsection
