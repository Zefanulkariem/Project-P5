<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wisatain.com</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
	
	<link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('user/css/bootstrap-datepicker.css')}}">
	<link rel="stylesheet" href="{{asset('user/css/jquery.timepicker.css')}}">

	
	<link rel="stylesheet" href="{{asset('user/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('user/css/style.css')}}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Wisatain.com</a><img src="https://www.svgrepo.com/show/393323/mountain.svg" alt="gunung" width="30px" class="logo">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link">Beranda</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">Tentang</a></li>
					<li class="nav-item"><a href="destination.html" class="nav-link">Destinasi</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<div class="hero-wrap js-fullheight" style="background-image: url({{asset('user/images/bg_5.jpg')}});">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading"></span>
					<h1 class="mb-4">Jelajahi destinasi Jawa Barat di Indonesia!</h1>
					<p class="caps"></p>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search d-flex justify-content-center">
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Kategori Wisata</a>

									<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

								</div>
							</div>
							<div class="col-md-12 tab-wrap">
								
								<div class="tab-content" id="v-pills-tabContent">

									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												@foreach ($kategori as $data)
												<div class="col-md d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">{{$data->nama_kategori}}</label>
													</div>
												</div>
												@endforeach
											</div>
										</form>
									</div>

									<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-lg d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">Destination</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Search place">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-in date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Check In Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Check-out date</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group p-4">
														<label for="#">Price Limit</label>

													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="ftco-section img ftco-select-destination" style="background-image: url({{asset('user/images/bg_3.jpg')}});">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Event / Acara</span>
						<h2 class="mb-4">Event / Acara yang sedang berlangsung</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
                    @foreach ($event as $data)
					<div class="col-md-4 mb-4 ftco-animate">
                        <div class="card text-dark shadow-sm" style="width: 18rem;">
                            <img src="{{asset('/image/wisata/' . $data->cover) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>{{ $data->tema_event}}</h5>
                                <p class="card-text text-secondary-emphasis">
									<li><span>{{ $data->lokasi->nama_lokasi }}</span></li>
								</p>
                                <a href="{{ $data->id }}" class="btn btn-danger">Selengkapnya</a>
                            </div>
                        </div>
					</div>
                    @endforeach
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Destinasi</span>
						<h2 class="mb-4">Destinasi Pilihan</h2>
					</div>
				</div>
				<div class="row">
                    @foreach ($wisata as $data)
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
                                <img src="{{asset('/image/wisata/' . $data->cover) }}" class="card-img-top" alt="...">
                                {{-- <span class="price">$550/person</span> --}}
                                <div class="text p-4">
                                    <span class="days">8 Days Tour</span>
									<h3><a href="#">{{$data->nama_wisata}}</a></h3>

                                    <p class="location"><span class="fa fa-map-marker"></span> {{$data->lokasi->nama_lokasi}}, {{$data->lokasi->kabupaten}}, {{$data->lokasi->provinsi}}</p>
                                    <ul>
                                        <li><span class="flaticon-shower"></span>2</li>
                                        <li><span class="flaticon-king-size"></span>3</li>
                                        <li><span class="flaticon-mountains"></span>Near Mountain</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
					{{-- <div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url({{asset('user/images/destination-2.jpg')}});">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">10 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
								<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url({{asset('user/images/destination-3.jpg')}});">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">7 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
								<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url({{asset('user/images/destination-4.jpg')}});">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">8 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
								<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url({{asset('user/images/destination-5.jpg')}});">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">10 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
								<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url({{asset('user/images/destination-6.jpg')}});">
								<span class="price">$550/person</span>
							</a>
							<div class="text p-4">
								<span class="days">7 Days Tour</span>
								<h3><a href="#">Banaue Rice Terraces</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Banaue, Ifugao, Philippines</p>
								<ul>
									<li><span class="flaticon-shower"></span>2</li>
									<li><span class="flaticon-king-size"></span>3</li>
									<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
								</ul>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</section>
		
		{{-- <section class="ftco-section ftco-about img"style="background-image: url({{asset('user/images/bg_4.jpg')}});">
			<div class="overlay"></div>
			<div class="container py-md-5">
				<div class="row py-md-5">
					<div class="col-md d-flex align-items-center justify-content-center">
						<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
							<span class="fa fa-play"></span>
						</a>
					</div>
				</div>
			</div>
		</section> --}}

{{-- 
		<section class="ftco-section testimony-section bg-bottom" style="background-image: url({{asset('user/images/bg_1.jpg')}});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
						<span class="subheading">Testimonial</span>
						<h2 class="mb-4">Tourist Feedback</h2>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12">
						<div class="carousel-testimony owl-carousel">
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="text">
										<p class="star">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
											<div class="pl-3">
												<p class="name">Roger Scott</p>
												<span class="position">Marketing Manager</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="text">
										<p class="star">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
											<div class="pl-3">
												<p class="name">Roger Scott</p>
												<span class="position">Marketing Manager</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="text">
										<p class="star">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
											<div class="pl-3">
												<p class="name">Roger Scott</p>
												<span class="position">Marketing Manager</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="text">
										<p class="star">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
											<div class="pl-3">
												<p class="name">Roger Scott</p>
												<span class="position">Marketing Manager</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="text">
										<p class="star">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
											<div class="pl-3">
												<p class="name">Roger Scott</p>
												<span class="position">Marketing Manager</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}


		<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url({{asset('user/images/bg_3.jpg')}});">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md pt-5">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">About</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
								<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md pt-5 border-left">
						<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Infromation</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
								<li><a href="#" class="py-2 d-block">General Enquiries</a></li>
								<li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
								<li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
								<li><a href="#" class="py-2 d-block">Refund Policy</a></li>
								<li><a href="#" class="py-2 d-block">Call Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md pt-5 border-left">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">Experience</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Adventure</a></li>
								<li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
								<li><a href="#" class="py-2 d-block">Beach</a></li>
								<li><a href="#" class="py-2 d-block">Nature</a></li>
								<li><a href="#" class="py-2 d-block">Camping</a></li>
								<li><a href="#" class="py-2 d-block">Party</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md pt-5 border-left">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">Have a Questions?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
									<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
									<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Wisatain.com</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</footer>
			
			

			<!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


			<script src="{{asset('user/js/jquery.min.js')}}"></script>
			<script src="{{asset('user/js/jquery-migrate-3.0.1.min.js')}}"></script>
			<script src="{{asset('user/js/popper.min.js')}}"></script>
			<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
			<script src="{{asset('user/js/jquery.easing.1.3.js')}}"></script>
			<script src="{{asset('user/js/jquery.waypoints.min.js')}}"></script>
			<script src="{{asset('user/js/jquery.stellar.min.js')}}"></script>
			<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
			<script src="{{asset('user/js/jquery.animateNumber.min.js')}}"></script>
			<script src="{{asset('user/js/bootstrap-datepicker.js')}}"></script>
			<script src="{{asset('user/js/scrollax.min.js')}}"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
			<script src="{{asset('user/js/google-map.js')}}"></script>
			<script src="{{asset('user/js/main.js')}}"></script>
			
		</body>
		</html>