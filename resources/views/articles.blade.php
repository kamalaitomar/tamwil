
@extends('layouts.app')

@section('content')
<div class="bg-primary d-flex align-items-center">
  <div class="container p-5 my-5 d-flex justify-content-center">
      <h1 class="m-1 text-white col-md-8 display-4 text-center @if( app()->getLocale() == 'ar') text-right @endif">
          {{__('tamwil.articles')}}
      </h1>
  </div>
</div>
<div class="container d-flex justify-content-center">
  <table class="col-md-8 m-5">
    <tbody>
      @foreach ($articles as $article)
      <tr>
        <td class="p-3 border-bottom">
          <h1 class="font-weight-bold mb-3 @if( app()->getLocale() == 'ar') text-right @endif"><a href="{{ route('article', [app()->getLocale(), 'slug'=>$article->slug_fr ])}}" class="text-dark">{{$article["title"]}}</a></h1>
          <p class="@if( app()->getLocale() == 'fr') text-right @endif">{{ $article->created_at->format('d-M-Y')}}</p>
        </td>
      </tr>     
      @endforeach
    </tbody>
  </table> 
  </div>   
@endsection

