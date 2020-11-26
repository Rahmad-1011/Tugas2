@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp
<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="{{checkRouteActive('home')}}"><a href="{{ url('/home') }}">Home</a></li>
						<li class="dropdown">
						  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Kategori
						  </a>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								  	<li class="{{checkRouteActive('#')}}">
                                		<a href="#"> Laptop </a>
                            		</li>
                            		<li class="{{checkRouteActive('#')}}">
                               			 <a href="#"> Aksesoris </a>
                           			</li>
                           			<li class="{{checkRouteActive('#')}}">
                                		<a href="#"> Smartphone </a>
                            		</li>
                           			<li class="{{checkRouteActive('#')}}">
                                		<a href="#"> Kamera </a>
                            		</li>
							  </ul>
						</li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
</nav>