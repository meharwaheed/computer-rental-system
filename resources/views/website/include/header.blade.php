<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!--PreLoader Ends-->

<!-- header -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="{{route('home_page')}}">
                            <img src="{{asset('website/assets/images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="{{route('home_page')}}">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Rental Laptops</a>
                            </li>
                            <li class="nav-item">
                                @if (auth()->check())
                                    <a class="nav-link"
                                        href="@if (auth()->user()->role == 'Customer') {{ route('user_dashboard') }}
                      
                                      @else
                                      {{ route('dashboard') }} @endif">Dashboard</a>
                                @else
                                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                                @endif
                            </li>
                            @if (auth()->check())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}">Logout </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register </a>
                                </li>
                            @endif
                            <li>
                                <div class="header-icons">
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Search For:</h3>
                        <input type="text" placeholder="Keywords">
                        <button type="submit">Search <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->
