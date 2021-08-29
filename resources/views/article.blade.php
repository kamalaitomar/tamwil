@extends('layouts.app')

@section('content')
<div class="container">
    <show-article-component :article="{{ $article }}"></show-article-component>
</div>
@endsection