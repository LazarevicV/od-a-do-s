<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">


	<title>{{$title}}</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-3 d-flex align-items-center">
							{{-- Add a route for the image --}}
							<img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid">
						</div>

						<div class="col-9 text-center">
							<form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>

							<ul class="col-6 js-clone-nav text-start site-menu mx-auto d-flex justify-content-between">
								<li class="active"><a href="index.html">Почетна</a></li>
								<li class="has-children">
									<a href="category.html">Развој</a>
									<ul class="dropdown">
										<li><a href="{{route('alat.alati')}}">Алати</a></li>
										<li><a href="{{route('blog.blogovi')}}">Инфо</a></li>
									</ul>
								</li>
								<li><a href="category.html">Дизајн</a></li>
								<li><a href="category.html">Магазин</a></li>
								<li><a href="category.html">Заједница</a></li>
                                <li><a href="{{route('login')}}">Пријави се</a></li>
							</ul>
						</div>
						{{-- <div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<form action="#" class="search-form d-none d-lg-inline-block">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</nav>


    @yield('content')


    <footer class="site-footer">
		<div class="container">
			<div class="row ">
				<div class="col-lg-4 offset-lg-2">
					<div class="widget">
						<p>Добродошли на наш веб портал, где се заступамо за коришћење ћирилице на интернету. Пружамо платформу за креативно и инклузивно дељење информација и искустава на ћириличном писму.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Друштвене мреже</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>

						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<ul class="list-unstyled float-start links">
							<li><a href="#">Почетна</a></li>
							<li><a href="#">Развој</a></li>
							<li><a href="#">Дизајн</a></li>
							<li><a href="#">Магазин</a></li>
							<li><a href="#">Заједница</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">О нама</a></li>
							<li><a href="#">Контакт</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-2">
				<div class="col-12 text-center">
          <!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/
              **==========
            -->

            <p class="m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Три прасета.<!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    {{-- <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div> --}}


    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/tiny-slider.js')}}"></script>

    <script src="{{ asset('js/flatpickr.min.js')}}"></script>


    <script src="{{ asset('js/aos.js')}}"></script>
    <script src="{{ asset('js/glightbox.min.js')}}"></script>
    <script src="{{ asset('js/navbar.js')}}"></script>
    <script src="{{ asset('js/counter.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>


  </body>
  </html>
