@extends('layouts.website')
@section('content')
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
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>All Rental Computers</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- products -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                @foreach ($services as $computer)
                    <div class="col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img height="200px" width="200px" src="{{ asset('website/assets/images/') }}/{{$computer->image}}"
                                        alt=""></a>
                            </div>
                            <h3>{{ $computer->title }}</h3>
                            <p class="product-price"><span>Per Hour/Price</span> {{ $computer->per_hour_rate }}$ </p>
                            <a href="{{ route('service_detail', [$computer->id]) }}" class="cart-btn"><i
                                    class="fas fa-eye"></i>View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- end products -->
@endsection
