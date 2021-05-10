@extends('layouts.app')

@section('content')

<div class="container">
    
    {{-- offres section  --}}
    <financement-component :profils="{{ $profils }}" :besoins="{{ $besoins }}" ></search-form-component>
        
</div>


@endsection
