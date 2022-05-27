<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">About us</h2>
                    <p>
                        The University of Tasmania is an affordable option for international students, providing a great
                        standard of living and lower accommodation costs than other Australian capital city
                        universities.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-box pages">
                    <h2 class="widget-title">Pages</h2>
                    <ul>
                        <li><a href="{{route('home_page')}}">Home</a></li>
                        <li><a href="{{('services')}}">Rental Computers</a></li>
                        <li>
                            @if (auth()->check())
                                <a
                                    href="@if (auth()->user()->role == 'Customer') {{ route('supper_admin_dashboard') }}
                  
                                  @else
                                  {{ route('dashboard') }} @endif">Dashboard</a>
                            @else
                                <a href="{{ url('login') }}">Login</a>
                            @endif
                        </li>
                        @if (auth()->check())
                            <li>
                                <a href="{{ route('logout') }}">Logout </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('register') }}">Register </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Get in Touch</h2>
                    <ul>
                        <li>Churchill Ave, Hobart TAS 7005, Australia</li>
                        <li>support@edu.au</li>
                        <li>+61 3 6226 2999</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
