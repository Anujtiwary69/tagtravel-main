<header class="main-header main-header-overlay bg-white">

    <div class="secondarybar-wrap">
        <div class="container-fluid secondarybar-container">
            <div class="secondarybar">
                <div class="row secondarybar-row align-items-center">

                    <div class="col-auto">

                        <div class="header-module">
                            <div class="ld-module-v-sep">
                                <span class="ld-v-sep-inner"></span>
                            </div><!-- /.ld-module-v-sep -->
                        </div><!-- /.header-module -->

                        <div class="header-module">
                            <a href="#" class="btn btn-naked">
                                <span>
                                    {{--  <span class="btn-txt">Compare and Get Cheap Prices</span>  --}}
                                    {{--  <span class="btn-icon">
                                        >
                                    </span>  --}}
                                </span>
                            </a>
                        </div><!-- /.header-module -->

                    </div><!-- /.col -->

                    <div class="col text-right">

                        <div class="header-module">
                            <a href="#" class="btn btn-naked">
                                <span>
                                    <span class="btn-txt">
                                        <b style="color: #dd3870;">CALL AN EXPERT ON:</b>
                                    </span>

                                </span>
                            </a>
                        </div><!-- /.header-module -->

                        <div class="header-module">
                            <ul class="lqd-custom-menu reset-ul inline-nav">
                                <li>

                                    <a href="tel:+(998 78) 150-35-53" class="sub" style="color: #dd3870 !important;"><i class="fa fa-phone"></i> &nbsp;
                                        +998950998080</a>
                                </li>
                                <li>
                                    <a href="mailto:info@tag-travels.com" class="sub" style="color: #dd3870 !important;">
                                    <i class="fa fa-envelope"></i> &nbsp;
                                    CESC@grandchortoqresort.com
                                    </a>
                                </li>

                            </ul>
                        </div><!-- /.header-module -->

                    </div><!-- /.col text-right -->

                </div><!-- /.secondarybar-row -->
            </div><!-- /.secondarybar -->
        </div><!-- /.secondarybar-container -->
    </div><!-- /.secondarybar-wrap -->

    <div class="mainbar-wrap" style="margin-top: -40px;">
        <div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
        <div class="container-fluid mainbar-container">
            <div class="mainbar" >
                <div class="row mainbar-row align-items-lg-stretch px-4" style="z-index: 100;">

                    <div class="col-auto">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/" rel="home">
                                <span class="navbar-brand-inner">
                                    <img class="logo-dark" src="{{asset('/assets/img/Chortoq-Logotravels.png')}}" alt="Chortoq travels" width="110">
                                    <img class="logo-light" src="{{asset('/assets/img/Chortoq-Logotravels.png')}}" alt="Chortoq travels" width="110">
                                    <img class="logo-sticky" src="{{asset('/assets/img/Chortoq-Logotravels.png')}}" alt="Chortoq travels" width="110">
                                    <img class="mobile-logo-default" src="{{asset('/assets/img/Chortoq-Logotravels.png')}}" alt="Chortoq travels" width="110">
                                    <img class="logo-default" src="{{asset('/assets/img/Chortoq-Logotravels.png')}}" alt="Chortoq travels" width="110">
                                </span>
                            </a>
                            <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile"
                                data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false"
                                data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
                                <span class="sr-only">Toggle navigation</span>
                                <span class="bars">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </span>
                            </button>
                        </div><!-- /.navbar-header -->
                    </div><!-- /.col -->

                    <div class="col px-2">



                    </div><!-- /.col -->

                    <div class="col-12 text-right">

                        <div class="collapse navbar-collapse" id="main-header-collapse">

                            <ul id="primary-nav" class="main-nav main-nav-hover-underline-3 nav align-items-lg-stretch justify-content-lg-start" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }'>
                                @foreach($menu as $key)
                                @php  $currentActive = "" @endphp
                                @if(Request::path()== str_replace(' ','-',strtolower($key)) || (Request::path()=="/" && $key == "HOME") )
                                   @php  $currentActive = "active" @endphp
                                @endif
                                <li class="current-menu-item  mt-4 mb-4 {{$currentActive}}">
                                    <a href="/{{str_replace(' ','-',strtolower($key))}}">
                                        <span class="link-icon"></span>
                                        <span class="link-txt">
                                            <span class="link-ext"></span>
                                            <span class="txt">
                                                {{ $key }}
                                                <span class="submenu-expander">
                                                    <i class="fa fa-angle-down"></i>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                @endforeach

                            </ul><!-- /#primary-nav  -->

                        </div><!-- /#main-header-collapse -->

                    </div><!-- /.col -->

                </div><!-- /.mainbar-row -->
            </div><!-- /.mainbar -->
        </div><!-- /.mainbar-container -->
    </div><!-- /.mainbar-wrap -->
<div class="bookingform hide" style="margin-top:3.3%">
@include('layouts.booking')
</div>
</header><!-- /.main-header -->
