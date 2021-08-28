@extends('layouts.app')

@section('content')
<div>
    <show-article-component :article="{{ $article }}"></show-article-component>
    
</div>
@endsection