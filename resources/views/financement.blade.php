@extends('layouts.app')

@section('content')

    {{-- offres section  --}}
    <financement-component :profils="{{ $profils }}" :besoins="{{ $besoins }}"></search-form-component>

@endsection
