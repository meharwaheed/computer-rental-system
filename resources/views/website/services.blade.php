@extends('layouts.website')
@section('content')
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
                @if(isset($services) and sizeof($services)>0)
                @foreach ($services as $computer)
                    <div class="col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img height="200px" width="200px" src="{{asset(env('PUBLIC_URL').'public/images/service_images/')}}/{{ $computer->image}}"
                                        alt=""></a>
                            </div>
                            <h3>{{ $computer->title }}</h3>
                            <p class="product-price"><span>Per Hour/Price</span> {{ $computer->per_hour_rate }}$ </p>
                            <a href="{{ route('service_detail', [$computer->id]) }}" class="cart-btn"><i
                                    class="fas fa-eye"></i>View Details</a>
                        </div>
                    </div>
                @endforeach
                @else
                <div class="col-12">
                    <p class="h4 text-center">No match found against this search</p>
                </div>
                @endif
            </div>
        </div>

    </section>
    <!-- end products -->
@endsection
