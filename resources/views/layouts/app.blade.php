<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    
    {{-- <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"> --}}

    {{-- <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}"> --}}

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
	
    <script>
        window._locale = '{{ config('app.locale')}}';
        let translation = @json(\Cache::get('translations', "0"));
        window._translations = translation ? translation : '';
    </script>
  </head>

  <body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
    <div id="app">
    <!-- nav  -->
    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container">

            {{-- logo  --}}
	        <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}">TAMWIL</a>

            {{-- nav links  --}}
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="oi oi-menu"></span> Menu
	        </button>
	        <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="{{ route('home', app()->getLocale()) }} " class="nav-link">{{__('tamwil.home')}}</a></li>
                    <li class="nav-item"><a href="{{ route('financement', app()->getLocale()) }}" class="nav-link">{{__('tamwil.funding')}}</a></li>
                    <li class="nav-item"><a href="{{ route('organisations', app()->getLocale()) }}" class="nav-link">{{__('tamwil.organizations')}}</a></li>

                    <li class="nav-item"><a href="{{ route('about.index', app()->getLocale()) }} " class="nav-link">{{__('tamwil.about')}}</a></li>

                    <li class="nav-item"><a href="{{ route('offre.index', app()->getLocale()) }}" class="nav-link">{{__('tamwil.admin')}}</a></li>
                </ul>
	        </div>
                @if (App::isLocale('ar'))
                    @if (in_array(Route::currentRouteName(), ["offre","showorganisation"] ) )
                        <a class="btn btn-info" href="{{ route(Route::currentRouteName(), ['locale'=>'fr', 'id'=>$id]) }}">Français</a>
                    @else
                        <a class="btn btn-info" href="{{ route(Route::currentRouteName(), 'fr') }}">Français</a> 
                    @endif
                @else
                    @if (in_array(Route::currentRouteName(), ["offre","showorganisation"] ) )
                        <a class="btn btn-info" href="{{ route(Route::currentRouteName(), ['locale'=>'ar', 'id'=>$id]) }}">العربية</a>
                    @else
                        <a class="btn btn-info" href="{{ route(Route::currentRouteName(), 'ar') }}">العربية</a> 
                    @endif
                @endif

	    </div>
    </nav>
    <!-- END nav -->
    <main id="main">
        @yield('content')
    </main>
    

    {{-- footer  --}}
    <footer class="ftco-footer">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4 ml-5">
                    <h2 class="ftco-heading-2">Explore</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 mr-5 text-center">
                    <h2 class="ftco-heading-2 logo"><a href="#">TAMWIL</a></h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter "></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook "></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md ">
                    <div class="ftco-footer-widget mb-4 ml-5">
                    <h2 class="ftco-heading-2">Company</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        </footer>
        

    <!-- loader -->
        {{-- <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>   --}}
    </div>
{{--     
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollax.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
    </html>
      
