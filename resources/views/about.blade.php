@extends('layouts.app')

@section('content')

<div class="hero-wrap py-5" :style="{ backgroundImage: 'url(/assets/images/bg1.jpg)' }" data-stellar-background-ratio="0.5">


    <div class="container ">
        <div class="p-2 d-flex align-items-center flex-column">
            <h1 class="text-center m-2 pb-4 "> {{__('about.Qui sommes nous ?')}} </h1>
        
            <div class="card  m-6">
                <div class="card-body">
                    <p class="card-text">
                        {{__('about.description')}}
                    </p>
                </div>
            </div>
            
                <div class="mt-5 col-8  text-center">
                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                    <form action=" {{ route('about.store', app()->getLocale()) }} " method="post">  
                        @csrf
                    <h1 class="m-2 pb-4 "> {{__('about.Contactez-nous')}} </h1>
                    <div class="my-3 ">
                        <label for="nom" class="form-label"> {{__('about.nom')}}</label>
                        <input type="nom" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="my-3 ">
                        <label for="email" class="form-label"> {{__('about.Email address')}}</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label"> {{__('about.message')}}</label>
                        <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">{{__('about.Envoyer')}}</button>
                </form>  
                </div>
              
        </div>
    </div>
</div>    

@endsection