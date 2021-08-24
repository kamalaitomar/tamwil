@extends('layouts.admin')

@section('content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une article</h1>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#fr" role="tab" aria-controls="home" aria-selected="true">Francais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ar" role="tab" aria-controls="profile" aria-selected="false">Arabe</a>
            </li>
        </ul>
        <div class="tab-content p-3" id="myTabContent">
            <div class="tab-pane fade show active" id="fr" role="tabpanel" aria-labelledby="home-tab">
                <form class="user" action=" {{ route('article.store') }} " method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Article titre</label>
                        <input type="text" class="form-control " id="title" name="title"  value="{{old('title', $article->title_fr)}}">
                        @error('title')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea type="text" class="form-control " id="content" name="content" rows="4">{{old('content', $article->content_fr)}}</textarea>
                        @error('content')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <div class="col-6  mb-3 mb-sm-0">
                            <div class="alert alert-warning" role="alert">veuillez remplir la suite des informations en arabe aussi</div>
                        </div>
                    </div>
                    
            </div>
            <div class="tab-pane fade text-right" id="ar" role="tabpanel" aria-labelledby="profile-tab" dir="rtl">
                <div class="form-group">
                    <label for="nom_ar">عنوان المقال</label>
                    <input type="text" class="form-control" id="title_ar" name="title_ar"  value="{{old('title_ar', $article->title_ar)}}">
                    @error('title_ar')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content_ar">المقال</label>
                    <textarea type="text" class="form-control" id="content_ar" name="content_ar" rows="4">{{old('content_ar', $article->content_ar)}}</textarea>
                    @error('content_ar')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Mise à jour
                </button>
                
                </form>
            </div>
        </div>
    </div>


@endsection
