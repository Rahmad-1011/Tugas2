<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TokoKite</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{url('/public')}}/cssweb/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{url('/public')}}/cssweb/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="{{url('/public')}}/cssweb/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{url('/public')}}/cssweb/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{url('/public')}}/cssweb/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		@include('template.bagan.header')
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		@include('template.bagan.navigation')
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#">Laptop</a></li>
							<li class="active">Laptop MSI</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="{{url('/public')}}/img/product01.png" alt="">
							</div>

							<div class="product-preview">
								<img src="{{url('/public')}}/img/product03.png" alt="">
							</div>

							<div class="product-preview">
								<img src="{{url('/public')}}/img/product06.png" alt="">
							</div>

							<div class="product-preview">
								<img src="{{url('/public')}}/img/product08.png" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="{{url('/public')}}/img/product01.png" alt="">
							</div>

							<div class="product-preview">
								<img src="{{url('/public')}}/img/product03.png" alt="">
							</div>

							<div class="product-preview">
								<img src="{{url('/public')}}/img/product06.png" alt="">
							</div>

							<div class="product-preview">
								<img src="{{url('/public')}}/img/product08.png" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{ $produk->nama }}</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Penilaian | Tambah Penilaian</a>
							</div>
							<div>
								<h3 class="product-price">Rp. {{ number_format($produk->harga) }}</h3>
								<span class="product-available">Stok : {{ $produk->stok }}  | Berat : {{ $produk->berat }} gr</span>
							</div>
							

							<div class="product-options">
								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label>
								<label>
									Color
									<select class="input-select">
										<option value="0">Hitam</option>
									</select>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Keranjang</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> Keinginanku</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Bandingkan</a></li>
							</ul>

							<ul class="product-links">
								<li>Kategori:</li>
								<li><a href="#">Laptop</a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Desckripsi</a></li>
								<li><a data-toggle="tab" href="#tab3">Penilaian(3)</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>{!! nl2br ($produk->deskripsi) !!}</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>4.5</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 80%;"></div>
														</div>
														<span class="sum">3</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 60%;"></div>
														</div>
														<span class="sum">2</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">Ucup</h5>
															<p class="date">27 Des 2019 09.00</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Laptopnya bagus gan, sesuai ekspektasi saya, dan saya sekarang menjadi hacker</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">Sukri</h5>
															<p class="date">2 Jun 2020 19.00</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Sesuai pesanan, ayo semua pesan laptop bagus ini</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">Mas Tur</h5>
															<p class="date">1 Agu 2020</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Barang mulus, no kendala</p>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Nama">
													<input class="input" type="email" placeholder="Email">
													<textarea class="input" placeholder="Penilaian"></textarea>
													<div class="input-rating">
														<span>Penilaianmu: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">Kirim</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="{{url('/public')}}/img/product01.png" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Laptop</p>
								<h3 class="product-name"><a href="#">Laptop MSI</a></h3>
								<h4 class="product-price">Rp.14.000.000 <del class="product-old-price">Rp.20.000.000</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Permintaan</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Perbandingan</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Keranjang</button>
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="{{url('/public')}}/img/product02.png" alt="">
								<div class="product-label">
									<span class="new">BARU</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Aksesoris</p>
								<h3 class="product-name"><a href="#">Headphone Razer</a></h3>
								<h4 class="product-price">Rp.1.000.000</h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Permintaan</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Perbandingan</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Keranjang</button>
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="{{url('/public')}}/img/product03.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Laptop</p>
								<h3 class="product-name"><a href="#">MAC</a></h3>
								<h4 class="product-price">Rp.25.000.000</h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Permintaan</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Perbandingan</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Keranjang</button>
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="{{url('/public')}}/img/product04.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Smartphone</p>
								<h3 class="product-name"><a href="#">Tablet Advan</a></h3>
								<h4 class="product-price">Rp.1.000.000</h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Permintaan</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Perbandingan</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Keranjang</button>
							</div>
						</div>
					</div>
					<!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- FOOTER -->
		@include('template.bagan.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{url('/public')}}/cssweb/js/jquery.min.js"></script>
		<script src="{{url('/public')}}/cssweb/js/bootstrap.min.js"></script>
		<script src="{{url('/public')}}/cssweb/js/slick.min.js"></script>
		<script src="{{url('/public')}}/cssweb/js/nouislider.min.js"></script>
		<script src="{{url('/public')}}/cssweb/js/jquery.zoom.min.js"></script>
		<script src="{{url('/public')}}/cssweb/js/main.js"></script>

	</body>
</html>
