<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +62895702460425</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> rahmadardianto69@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Ketapang, Kalimantan Barat</a></li>
					</ul>
					<ul class="header-links pull-right">
						<h5 style="color: #ffffff;">
						@if(Auth::guard('pembeli')->check())
                            {{Auth::guard('pembeli')->user()->nama}}
                        @endif
						</h5>
						<li><a href="{{ url('/logout_adm') }} "><i class="fa fa-user"></i>Log Out</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="{{url('/public')}}/img/logo1.png" alt="" height="50px" width="250px">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="{{url('home/filter')}}" method="post">
									@csrf
									<input class="input" type="text" placeholder="Cari disini"
									 name="kategori">
									<button class="search-btn">Cari</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Keinginanku</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Keranjang</span>
										<div class="qty">2</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Laptop MSI</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>Rp. 14.000.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Headphone Razer</a></h3>
													<h4 class="product-price"><span class="qty">2x</span>Rp. 1.000.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item terpilih</small>
											<h5>SUBTOTAL: Rp. 17.000.000</h5>
										</div>
										<div class="cart-btns">
											<a href="#">Lihat keranjang</a>
											<a href="{{ url('/checkout') }}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>