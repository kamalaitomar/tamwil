@extends('layouts.app')

@section('content')
    
	{{-- welcome section  --}}
	<section>
        <div class="hero-wrap" :style="{ backgroundImage: 'url(assets/images/bg1.jpg)' }" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center d-flex justify-content-between">
                    <div class="col-md-5 ftco-animate d-flex align-items-end">
                        <div class="text w-80 text-center">
                            <h1 class="mb-4">{{__("tamwil.slogon")}}</h1>
                            <p class="mb-4">{{__("tamwil.sous_slogon")}}</p>
							<p>
								<a href="{{ route('financement', app()->getLocale()) }}" class="btn btn-success py-3 px-4">{{__("tamwil.financement_button")}}</a>
							</p>
						</div>
						
                    </div>
                    <div class="col-md-6 ftco-animate d-flex align-items-end">
						<img src="assets/images/asset_1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        
    </section>
           
    {{-- Comment ça marche section  --}}
	<section class="ftco-section mt-4 @if(App::isLocale('ar')) text-right @endif">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading"> {{__('tamwil.service')}} </span>
            <h2>{{__('tamwil.how')}}</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-calendar"></span>
	    					</div>
    					</div>
    					<h2>{{__('tamwil.choose_p') }} </h2>
    					{{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-qa"></span>
	    					</div>
    					</div>
    					<h2>{{__('tamwil.choose_c') }}</h2>
  						{{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-checklist"></span>
	    					</div>
    					</div>
    					<h2>{{__('tamwil.choose_b') }}</h2>
  						{{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
    				</div>
    			</div>
    			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>04</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-checklist"></span>
	    					</div>
    					</div>
    					<h2>{{__('tamwil.choose_o') }}</h2>
  						{{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    {{-- sponsors section  --}}
	<section class="ftco-section @if(App::isLocale('ar')) text-right @endif">
		<div class="container">
			<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<span class="subheading"> {{ __("tamwil.our_sponsors") }} </span>
				<h2 class="mb-3"> {{ __("tamwil.spons_slogon") }} </h2>
			</div>
			</div>
			<div class="row tabulation mt-4 ftco-animate">
			<div class="col-md-4">
					<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						<li class="nav-item">
						<a class="nav-link active py-4" data-toggle="tab" href="#services-1"> {{__('tamwil.mepi') }} </a>
						</li>
						<li class="nav-item">
						<a class="nav-link py-4" data-toggle="tab" href="#services-2">{{__('tamwil.cgem') }}</a>
						</li>
						<li class="nav-item">
						<a class="nav-link py-4" data-toggle="tab" href="#services-3">{{__('tamwil.cri') }}</a>
						</li>
						<li class="nav-item">
						<a class="nav-link py-4" data-toggle="tab" href="#services-4">{{__('tamwil.ebf') }}</a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<div class="tab-content">
						<div class="tab-pane container p-1 active" id="services-1">
						<div class="img" style="background-image: url({{asset('assets/images/sponsor1.png')}});"></div>
						<h3 class="text-center"><a href="#">{{__('tamwil.mepi') }}</a></h3>
						<p>{{__('tamwil.lorem') }}</p>
						</div>
						<div class="tab-pane container p-1 fade" id="services-2">
						<div class="img" style="background-image: url({{asset('assets/images/sponsor2.png')}});"></div>
						<h3 class="text-center"><a href="#">{{__('tamwil.cgem') }}</a></h3>
						<p>{{__('tamwil.lorem') }}</p>
						</div>
						<div class="tab-pane container p-1 fade" id="services-3">
						<div class="img" style="background-image: url({{asset('assets/images/sponsor3.png')}});"></div>
						<h3 class="text-center"><a href="#">{{__('tamwil.cri') }}</a></h3>
						<p>{{__('tamwil.lorem') }}</p>
						</div>
						<div class="tab-pane container p-1 fade" id="services-4">
						<div class="img" style="background-image: url({{asset('assets/images/sponsor4.png')}});"></div>
						<h3 class="text-center"> <a href="#" >{{__('tamwil.ebf') }}</a></h3>
						<p>{{__('tamwil.lorem') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    @endsection
   