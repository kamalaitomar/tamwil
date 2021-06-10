@extends('layouts.app')

@section('content')

<div class="h-100 hero-wrap py-5 " :style="{ backgroundImage: 'url(/assets/images/bg1.jpg)' }" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="p-2 d-flex align-items-center flex-column">
            <h1 class="text-center m-2 pb-4 "> {{__('about.Qui sommes nous ?')}} </h1>
            <div class="card  m-6">
                <div class="card-body content">
                    <p class="card-text">
                        {{__('about.description')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
 
    <div class=" container">

        <form action=" {{ route('about.store', app()->getLocale()) }} " method="post">  
            @csrf
        <h1 class="mt-5  text-center "> {{__('about.Contactez-nous')}} </h1>
        @if (session('status'))
                        <div style="color: green" class=" mt-2 alert alert-success" role="alert">
                            
                        </div>
        @endif

        {{-- @if(session()->has('status'))
                        <h3 >
                           ({{session()->get('status')}})
                        </h3>
         @endif                    --}}

            <div class="my-3 ">
                <label for="nom" class="form-label col-12 {{ App::isLocale('ar') ? 'text-right'  : ''  }}"> {{__('about.nom')}}</label>
                <input type="nom" class="form-control" id="nom" name="nom" value="{{ old('nom')}}">
                @error('nom')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="my-3 ">
                <label for="email" class="form-label col-12 {{ App::isLocale('ar') ? 'text-right'  : ''  }}" > {{__('about.Email address')}}</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}">
                @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label col-12 {{ App::isLocale('ar') ? 'text-right'  : ''  }}"> {{__('about.message')}}</label>
                <textarea class="form-control" id="message" rows="4" name="message" >{{ old('message')}}</textarea>
                @error('message')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-outline-primary ">{{__('about.Envoyer')}}</button>
        </form>  
    </div>   
</div>
@endsection
   
