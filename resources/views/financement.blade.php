@extends('layouts.app')

@section('content')

<div class="container">
    
    {{-- offres section  --}}
    <financement-component :profils="{{ $profils }}"></financement-component>
        
</div>


@endsection
