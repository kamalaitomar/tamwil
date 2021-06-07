@extends('layouts.app')



@section('content')

<div>

{{-- organisation section  --}}
    <organisation-component :organisations="{{ $organisations }}" :besoins="{{ $besoins }}" ></dropdown-form-component>

</div>



@endsection