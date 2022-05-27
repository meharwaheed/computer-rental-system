@extends('layouts/supper_admin')

<!--Start page content-->
@section('content')
<?php
use Carbon\Carbon;
 ?>
<style type="text/css">
    .widget-16 .counter {
    color: #2c304d;
    font-size: 1.6rem;
}
</style>
<div class="container-fluid pt-24">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="widget widget-16 has-shadow">
                <div class="widget-body">
                    <div class="row">
                        <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                            <div class="counter">Admin/Staff Dashboard</div>
                            <br>
                            <div class="total-views">

                            </div>
                        </div>
                    </div>
                    <div class="row flex-row">
                            <!-- Begin  -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                         
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">Total Customers</div>
                                                <div class="number">{{$total_customers}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <!-- Begin  -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">Total UCR Staff</div>
                                                <div class="number">{{$total_staff}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <!-- Begin Twitter -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                         
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">Total Web Managers</div>
                                                <div class="number">{{$total_managers}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Twitter -->

                            <!-- Begin Twitter -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">All Users</div>
                                                <div class="number">{{$total_users}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Twitter -->
                            <!-- Begin Linkedin -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                           
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">All Computers on Rent</div>
                                                <div class="number">{{$rented_devices}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Linkedin -->
                            <!-- Begin Linkedin -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">Available Computers</div>
                                                <div class="number">{{$available_devices}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Linkedin -->
                            <!-- Begin Linkedin -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <div class="title text-facebook">Total Computers</div>
                                                <div class="number">{{$total_devices}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Linkedin -->
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
@stop

