@if(auth()->user() and request()->route()->getName() != 'home_page')
     @if(auth()->user()->is_active == 0)
         <?php
           session()->flash('message', "Your Account has been blocked. Please contact to Admin");
           session()->flash('alert-type', "error");

         ?>
         <script>window.location = "{{route('home_page')}}";</script>
     @endif
 @endif
<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ENV('APP_NAME')}}</title>
    <!--====== Bootstrap css ======-->
    <!--====== Notification css ======-->
    <link href="{{ asset('public/assets/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('website/assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('website/assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('website/assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('website/assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('website/assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('website/assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('website/assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('website/assets/css/responsive.css')}}">

    <style>
        .toast {
    opacity:1!important;
}
    </style>


</head>
<body>

@include('website.include.header')
@yield('content')
@include('website.include.footer')

<!--Scroll to top-->
<script src="{{ asset('public/assets/js/toastr.min.js') }}"></script>

	<!-- jquery -->
	<script src="{{asset('website/assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('website/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('website/assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('website/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('website/assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('website/assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('website/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('website/assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('website/assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('website/assets/js/main.js')}}"></script>

<script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        // "showEasing": "swing",
        // "hideEasing": "linear",
        // "showMethod": "fadeIn",
        // "hideMethod": "fadeOut"
    }

    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','Notification')}}"


    switch (type) {
        case 'Notification':
            toastr.info("{{ Session::get('message') }}", 'Congrats');
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}", 'Success');
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}", 'Warning');
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}", 'Error');
            break;
            default:
            toastr.error("{{ Session::get('message') }}", 'Error');
            break;
    }
    @endif
    @if($errors->any())
    @php
        $html  = "<ul>";

        foreach ($errors->all() as $error) {
            $html .= "<li> $error </li>";
        }
            $html .= "</ul>";
    @endphp
    toastr.error("{!! $html !!}", 'Error');
    @endif
</script>
@yield('footer_scripts')
<script type="text/javascript">

function generalAjax(data, route, call_back)

{



$.ajax({

type: "POST",

url: route,

data: data,

dataType: 'json',

async: true,

success: call_back,

error: function (err) {
 toastr.error("Network Server Error",'Error');
return err;

}

});

}


</script>
</body>
</html>

