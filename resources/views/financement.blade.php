@extends('layouts.app')

@section('content')

<div class="container">
    
    {{-- offres section  --}}
    <financement-component :profils="{{ $profils }}" :besoins="{{ $besoins }}" ></financement-component>
        
</div>


@endsection
