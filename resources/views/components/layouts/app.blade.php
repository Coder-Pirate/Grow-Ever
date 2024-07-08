{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles
    </head>
    <body>
        {{ $slot }}
        Hello   

        @livewireScripts
    </body>
</html> --}}





<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>

<head>
	<meta charset="utf-8">
	<title>Grow Ever - Deliver solutions, impart knowledge, and continuously increase value for clients.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="Deliver solutions, impart knowledge, and continuously increase value for clients.">
	<meta name="author" content="Grow Ever">
	<link rel="shortcut icon" href="{{ asset('frontend/images/fabicon.webp')}}" type="image/fabicon.webp">
	<link rel="icon" href="{{ asset('frontend/images/fabicon.webp')}}" type="image/fabicon.webp">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/brands.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/solid.css')}}">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">

    @livewireStyles
</head>

<body>
   

<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{ asset('frontend/images/logo.png')}}" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route('home', 1) }}">Home</a></li>
					<li class="nav-item "> <a wire:navigate class="nav-link" href="{{ route('page', 1) }}">About Us</a></li>
					<li class="nav-item "> <a wire:navigate class="nav-link" href="{{ route('servicesPage') }}">Services</a></li>
					<li class="nav-item "> <a wire:navigate class="nav-link" href="{{ route('teamPage') }}">Our Team</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link " href="{{ route('project') }}">Project</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link " href="{{ route('blog') }}">Blog</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link " href="{{ route('faq') }}">FAQ</a></li>
				</ul>
				<a wire:navigate href="{{ route('contact') }}" class="btn btn-outline-primary">Contact Us</a>				
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->

{{ $slot }}
{{-- <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!" method="post">
          <div class="row">
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_amount" class="form-label">Amount</label>
                <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_how_long_for" class="form-label">How long for?</label>
                <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
              </div>
            </div>
            <div class="col-lg-12 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_repayment" class="form-label">Repayment</label>
                <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control shadow-none" id="loan_full_name">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_email_address" class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none" id="loan_email_address">
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}






<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">

						@foreach (getServices() as $service)
						<li class="mb-2"><a wire:navigate href="{{ route('servicePage',$service->id ) }}">{{ $service->title}}</a>
						</li>
						@endforeach

						{{-- <li class="mb-2"><a href="service-details.html">Digital Marketing</a>
						</li> --}}
						{{-- <li class="mb-2"><a href="service-details.html">Web Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Logo Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Graphic Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">SEO</a>
						</li> --}}
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a wire:navigate href="{{ route('page', 1) }}">About Us</a>
						</li>
						<li class="mb-2"><a wire:navigate href="{{ route('contact') }}">Contact Us</a>
						</li>
						<li class="mb-2"><a wire:navigate href="{{ route('project') }}">Project</a>
						<li class="mb-2"><a wire:navigate href="{{ route('blog') }}">Blog</a>
						</li>
						<li class="mb-2"><a wire:navigate href="{{ route('teamPage') }}">Team</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Other Links</h5>
					<ul class="list-unstyled">
						<li class="list-inline-item me-4"><a wire:navigate  href="{{ route('page', 2) }}">Privacy Policy</a>
                        </li>
						<li class="list-inline-item me-4"><a wire:navigate  href="{{ route('page', 3) }}">Terms &amp; Conditions</a>
                        </li>
					</ul>
				</div>
			</div>			
		</div>
		
	</div>
</footer>

<!-- # JS Plugins -->
<script src="{{ asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>

<!-- Main Script -->
<script src="{{ asset('frontend/js/script.js')}}"></script>
@livewireScripts
</body>
</html>