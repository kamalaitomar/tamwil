@extends('layouts.app')

@section('content')
<div class="bg-primary d-flex align-items-center">
    <div class="container p-5 my-5 d-flex justify-content-center">
        <h1 class="m-1 text-white col-md-8 display-4 @if( app()->getLocale() == 'ar') text-right @endif">
            {{$article["title"]}}
        </h1>
    </div>
</div>
<div class="container">
    <show-article-component :article="{{ $article }}"></show-article-component>
</div>
@endsection