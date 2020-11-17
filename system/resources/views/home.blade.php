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
		<link rel="stylesheet" href="{{url('/public')}}/cssweb/css/font-awesome.min.css">

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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{url('/public')}}/img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Koleksi<br>Laptop</h3>
								<a href="#" class="cta-btn"> Beli sekarang <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{url('/public')}}/img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Koleksi<br>Aksesoris</h3>
								<a href="#" class="cta-btn"> Beli sekarang <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{url('/public')}}/img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Koleksi<br>Kamera</h3>
								<a href="#" class="cta-btn"> Beli sekarang <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Produk Baru</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptop</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphone</a></li>
									<li><a data-toggle="tab" href="#tab1">Kamera</a></li>
									<li><a data-toggle="tab" href="#tab1">Aksesoris</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										@foreach($list_produk as $produk)
										<div class="product">
											<div class="product-img">
												<img src="{{url('/public')}}/img/product01.png" alt="">
												<div class="product-label">
													<span class="new">BARU</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Laptop</p>
												<h3 class="product-name"><a href="{{ url('product', $produk->id) }}">{{ $produk->nama }}</a></h3>
												<h4 class="product-price"> Rp. {{ number_format($produk->harga) }}</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Keinginan</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Bandingkan</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Keranjang</button>
											</div>
										</div>
										<!-- /product -->
										@endforeach
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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
