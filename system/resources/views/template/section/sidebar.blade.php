@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li class="{{checkRouteActive('beranda')}}">
                        <a href="{{ url('/beranda') }}"><i class="fa fa-dashboard"></i> Beranda </a>
                    </li>

                     <li class="{{checkRouteActive('adm_kategori')}}">
                        <a href="{{ url('/adm_kategori') }}"><i class="fa fa-edit"></i> Kategori </a>
                    </li>

                    <li class="{{checkRouteActive('adm_produk')}}">
                        <a href="{{ url('/adm_produk') }}"><i class="fa fa-edit"></i> Produk </a>
                    </li>

                     <li class="{{checkRouteActive('adm_promo')}}">
                        <a href="{{ url('/user') }}"><i class="fa fa-edit"></i> User </a>
                    </li>

                    <li class="{{checkRouteActive('#')}}">
                        <a href="#"><i class="fa fa-sitemap"></i> Master Data <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{checkRouteActive('#')}}">
                                <a href="#"> Pelanggan </a>
                            </li>
                            <li class="{{checkRouteActive('#')}}">
                                <a href="#"> Supplier </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
</nav>