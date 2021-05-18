@extends('layouts.app')

@section('content')
    
	{{-- welcome section  --}}
	<section>
        <div class="hero-wrap" :style="{ backgroundImage: 'url(assets/images/bg1.jpg)' }" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center d-flex justify-content-between">
                    <div class="col-md-5 ftco-animate d-flex align-items-end">
                        <div class="text w-80">
                            <h1 class="mb-4">Entrepreneurs: vous avez accès à plus de chose</h1>
                            <p class="mb-4">Bienvenu sur Tamwil, la première plateforme digitale de recherche de financement pour les entrepreneurs et les entreprises de la Région Marrakech-Safi.</p>
							<p>
								<a href="/financement" class="btn btn-success py-3 px-4">Explorez vos options de financement</a>
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
	<section class="ftco-section mt-4">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Service</span>
            <h2>Comment ça marche?</h2>
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
    					<h2>choisissez votre profil</h2>
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
    					<h2>choisissez votre cycle de vie</h2>
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
    					<h2>choisissez votre besoin</h2>
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
    					<h2>choisissez l'offre</h2>
  						{{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    {{-- sponsors section  --}}
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Nos sponsors</span>
                    <h2 class="mb-3">We Can Help You With This Situation</h2>
                </div>
                </div>
				<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Middle East Partnership Initiative</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Confédération générale des entreprises du Maroc</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Centre Régional d'Investissement Marakech Safi</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4">Emerging Business Factory</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url({{asset('assets/images/sponsor1.png')}});"></div>
						  	<h3><a href="#">Middle East Partnership Initiative</a></h3>
						  	<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url({{asset('assets/images/sponsor2.png')}});"></div>
						  	<h3><a href="#">Confédération générale des entreprises du Maroc</a></h3>
						  	<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. </p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url({{asset('assets/images/sponsor3.png')}});"></div>
						  	<h3><a href="#">Centre Régional d'Investissement Marakech Safi</a></h3>
						  	<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. </p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url({{asset('assets/images/sponsor4.png')}});"></div>
						  	<h3><a href="#">Emerging Business Factory</a></h3>
						  	<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. </p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>


    @endsection
   