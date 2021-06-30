@extends('layouts.app')

@section('content')

<div class="container">
    {{-- @dd($organisations); --}}
     <organisations-component :organisations="{{ $organisations }}" :besoins="{{ $besoins }}" ></organisations-component> 
        
</div>


@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container my-5">

   <form method="POST" action="{{ route('organisation', app()->getLocale()) }}">
      <div>

         <label for="typeo"> Types des organismes :</label>

          <select class="form-control " name="organisation">
            @foreach ($organisations as $organisation)

               <option  name="org" value="{{ $organisation ->types_des_organisations}}" >{{ $organisation ->types_des_organisations}}</option>

            @endforeach
          </select>

      </div>

         <button type="submit" class="my-2">Recherche</button>
      
  </form>
</div>
  

 
   
@endsection

     --}}


