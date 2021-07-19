@extends('layouts.app')

@section('content')

<div class="container">
    <div class="my-5 p-2 m-2">
        <div class="row @if(App::isLocale('ar')) text-right @endif">
            <div class="col-3 offset-1">
                <img src="/assets/images/logo-placeholder.png" class="mx-auto col-12">
                <div class="my-2">
                    <p>0622222222</p>
                    <p>test@gmail.com</p>
                    <p> <a href="#">www.test.com</a></p>
                    <p>Synergie Media, Immeuble Borj Agadir, Avenue Kadi Ayad, Agadir</p>
                </div>
            </div>
            <div class="col-8 m-auto" >
                <h1 class="mb-3">{{$offre['name']}}</h1>
                <h4 class="text-info mb-0 ">{{__('offre.objet')}}</h4>
                <p class="mb-3">{{$offre['objet']}}</p>
                @if ($offre['condition'] != null)
                    <h4 class="text-info mb-0">{{__('offre.condition')}}</h4>
                    <p class="mb-3">{{$offre['condition']}}</p>
                @endif 
                <h4 class="text-info mb-0">{{__('offre.description')}}</h4>
                <p class="mb-3">{{$offre['description']}}</p>

                @if ($organisations  )
                    <div class="row" >
                        <div class="my-3  col-12">  
                            <h4 class="text-info ml-2">{{__('offre.organisations')}}</h4>
                            <div class="row m-1">

                                @foreach ($organisations as $organisation)
                                    <div class="card col-4 m-2">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary text-uppercase">{{$organisation['name']}}</h5>
                                            <div class="d-flex align-items-end"> 
                                                <a href=" {{ route('showorganisation', [app()->getLocale(), $organisation["id"]]) }}" class="btn btn-primary" target="_blank">Afficher l'organisation</a>
                                            </div>
                                        </div>
                                    </div> 
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </div>
</div>

@endsection

