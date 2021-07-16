@extends('layouts.app')

@section('content')

   <div class="container">
      <organisations-component :organisations="{{ $organisations }}" :besoins="{{ $besoins }}" ></organisations-component>     
   </div>


@endsection



