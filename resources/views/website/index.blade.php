@extends('layouts.website')
@section('content')
    @include('website.include.errors')

    <style>
        .hero-bg {
            background-image: url("{{ asset('website/assets/images/banner.jpg') }}")
        }

    </style>
    <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Computers & Laptops</p>
                            <h1>UTAS Rental Computers</h1>
                            <div class="hero-btns">
                                <a href="{{route('services')}}" class="boxed-btn">See Rental Computers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="content">
                            <h3>Laptop Services</h3>
                            <p>start $5 Per/Hour</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 Support</h3>
                            <p>Get support all day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Max Hours</h3>
                            <p>You can take device on rent for max 5 hours</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Computers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($computers as $computer)
                    <div class="col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img width="200px" height="200px"
                                        src="{{asset(env('PUBLIC_URL').'public/images/service_images/')}}/{{ $computer->image}}" alt=""></a>
                            </div>
                            <h3>{{ $computer->title }}</h3>
                            <p class="product-price"><span>Per Hour/Price</span> {{ $computer->per_hour_rate }}$ </p>
                            <a href="{{ route('service_detail', [$computer->id]) }}" class="cart-btn"><i
                                    class="fas fa-eye"></i>View Details</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-center">
                <a href="{{route('services')}}" class="cart-btn">View All Computers</a>
            </div>
        </div>
    </div>
    <!-- end product section -->
@endsection
