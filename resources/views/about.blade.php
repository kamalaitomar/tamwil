@extends('layouts.app')

@section('content')

<div class="hero-wrap py-5" :style="{ backgroundImage: 'url(/assets/images/bg1.jpg)' }" data-stellar-background-ratio="0.5">


    <div class="container ">
        <div class="p-2">
            <h1 class="text-center m-2 pb-4 "> {{__('about.Qui sommes nous ?')}} </h1>
        
            <div class="card  m-6">
                <div class="card-body">
                    <p class="card-text">
                        {{__('about.description')}}
                    </p>
                </div>
            </div> 
            <div class="  justify-content-center align-items-center mt-5 col-8  ">
                <h1 class="text-center m-2 pb-4 "> {{__('about.Contactez-nous')}} </h1>

                <div class="my-3">
                    <label for="exampleFormControlInput1" class="form-label"> {{__('about.Email address')}}</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"> {{__('about.message')}}</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">{{__('about.Envoyer')}}</button>
            </div>
        </div>
    </div>
</div>    

@endsection