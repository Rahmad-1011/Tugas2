@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li class="{{checkRouteActive('admin/beranda')}}">
                        <a href="{{ url('admin/beranda') }}"><i class="fa fa-dashboard"></i> Beranda </a>
                    </li>

                     <li class="{{checkRouteActive('admin/kategori')}}">
                        <a href="{{ url('admin/kategori') }}"><i class="fa fa-edit"></i> Kategori </a>
                    </li>

                    <li class="{{checkRouteActive('admin/produk')}}">
                        <a href="{{ url('admin/produk') }}"><i class="fa fa-edit"></i> Produk </a>
                    </li>

                    <li class="{{checkRouteActive('admin/login_adm')}}">
                        <a href="{{ url('admin/user') }}"><i class="fa fa-edit"></i> User </a>
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