@extends('layouts.app')

@section('content')

   <div class="container">
      <organisations-component :organisations="{{ $organisations }}" ></organisations-component>     
   </div>


@endsection



