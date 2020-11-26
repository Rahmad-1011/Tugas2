<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TokoKite</title>

		<!-- Google font -->
		@include('template.bagan.css')
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
					<div class="col-md-3">
						<form action="{{url('home/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Kategori </label>
							<select name="id_kategori" class="form-control">
							@foreach($list_kategori as $kategori)
								<option value="{{$kategori->id}}">{{$kategori->nama}}</option>
							@endforeach
							</select>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label"> Harga Min </label>
									<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label"> Harga Max </label>
									<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
								</div>
							</div>
						</div>
						<button class="btn btn-primary"><i class="fa fa-search"></i>Filter</button>
						</form>
					</div>
					
					<div class="col-md-9">
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
												<p class="product-category"><a href="{{url('product', $produk->id)}}">{{ $produk->kategori->nama }}</a></p>
												<h3 class="product-name"><a href="{{url('product', $produk->id)}}">{{ $produk->nama }}</a></h3>
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
		@include('template.bagan.js')

	</body>
</html>
