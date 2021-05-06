@extends('layouts.app')

@section('content')

    {{-- offres section  --}}
    <search-form-component :profils="{{ $profils }}" :besoins="{{ $besoins }}" ></search-form-component>

@endsection
