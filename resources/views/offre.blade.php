@extends('layouts.app')

@section('content')

<div class="container">
    <div class="my-5 p-2 m-2">
        <div class="row @if(App::isLocale('ar')) text-right @endif">
            <div class="col-10 m-auto" >
                <h1 class="mb-3">{{$offre['name']}}</h1>
                <h4 class="text-info mb-0 ">{{__('offre.objet')}}</h4>
                <p class="mb-3">{{$offre['objet']}}</p>
                <h4 class="text-info mb-0">{{__('offre.description')}}</h4>
                <p class="mb-3">{{$offre['description']}}</p>
                @if ($offre['condition'] != null)
                    <h4 class="text-info mb-0">{{__('offre.condition')}}</h4>
                    <p class="mb-3">{{$offre['condition']}}</p>
                @endif 

                @if ($organisations  )
                    <div class="row" >
                        <div class="col-12">  
                            <h4 class="text-info">{{__('offre.organisations')}}</h4>
                            <div class="row m-1">

                                @foreach ($organisations as $organisation)                                  
                                    <div class="col-4 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2">
                                            <div class="text-center">
                                                <img src="/assets/images/organisation/{{$organisation->icone}}" class="rounded" style="height:70px;">
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title font-weight-bold">{{$organisation['name']}}</h6>
                                            </div>
                                            
                                            <h6 class="text-center text-primary"> {{$organisation['type']}}</h6>
                                            <div class="d-flex align-items-end">
                                                <a href=" {{ route('showorganisation', [app()->getLocale(), $organisation["id"]]) }}" class="btn btn-outline-primary btn-lg btn-block m-3 ">{{__('organisation.Afficherlorganisation')}}</a>
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

