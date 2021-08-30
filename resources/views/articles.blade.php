
@extends('layouts.app')

@section('content')
<section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        @foreach ($articles as $article)
          <div class="col-md-4 d-flex ftco-animate ">
              <div class="blog-entry justify-content-end bg-white">
                  <div class="text text-center p-1 ">
                      <div class="meta text-center mb-2 d-flex align-items-center justify-content-center ">
                          <div>
                              <span class="day">{{ $article->created_at->format('d')}}</span>
                              <span class="mos">{{ $article->created_at->format('F')}}</span>
                              <span class="yr">{{ $article->created_at->format('Y')}}</span>
                          </div>
                      </div>
                      <h3 class="heading mb-3"><a href="{{ route('article', [app()->getLocale(), 'slug'=>$article->slug_fr ])}}">{{$article["title"]}}</a></h3>
                      {{-- <p>{{$article["content"]}}</p> --}}
                  </div>
              </div>
          </div>            
        @endforeach
      </div>
    </div>
  </section>	
@endsection

