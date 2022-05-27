@extends('layouts.website')
@section('content')
    <style>
        .rent_out {
            left: 40% !important;
        }
        b{
            color: rgb(187, 127, 16);
        }

    </style>
    <!--====== PAGE TITLE PART START ======-->

    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Computer Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PAGE TITLE PART ENDS ======-->

    <!--====== SERVICES PRICING PART START ======-->
    <section>
        <div>
            <div class="container">
                <div class="row my-5">
                    <div class="col-md-6">
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b class="pr-5">Brand: </b>{{ $service->brand }}</li>
                                <li class="list-group-item"><b class="pr-5">Name: </b>{{ $service->title }}</li>
                                <li class="list-group-item"><b class="pr-5">Rate Per/Hour: </b>
                                    ${{ $service->per_hour_rate }}</li>
                                <li class="list-group-item"><b class="pr-5">Operating System
                                    </b>{{ $service->os }}</li>
                                <li class="list-group-item"><b class="pr-5">Display Size:
                                    </b>{{ $service->display_size }}</li>
                                <li class="list-group-item"><b class="pr-5">Ram: </b>{{ $service->ram }}</li>
                                <li class="list-group-item"><b class="pr-5">Number of USB Ports:
                                    </b>{{ $service->no_of_usb_ports }}</li>
                                <li class="list-group-item"><b class="pr-5">Number of HDMI Ports:
                                    </b>{{ $service->no_of_hdmi_ports }}</li>
                                <li class="list-group-item"><b class="pr-5">Category:
                                    </b>{{ $service->category }}</li>
                                <li class="list-group-item"><b class="pr-5">Security Deposit:
                                    </b>${{ $service->security_deposit }}</li>
                                <li class="list-group-item"><b class="pr-5">Insurance Amount:
                                    </b>${{ $service->insurance_amount }}</li>
                                <div class="text-center">
                                    <a href="{{ route('checkout_page', [$service->id]) }}"
                                        class="cart-btn px-4 mt-3">Rent It Now</a>

                                </div>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            @if ($service->is_rented == 1)
                                <span class="rent_out">Reserved</span>
                            @endif
                            <img width="100%" height="500px" class="rounded"
                                src="{{ asset('website/assets/images/') }}/{{ $service->image }}">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
