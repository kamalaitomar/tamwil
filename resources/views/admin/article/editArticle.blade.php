@extends('layouts.admin')

@section('content')
    <div>
        <article-component :article="{{ $article }}"></article-component>
    </div>


@endsection
