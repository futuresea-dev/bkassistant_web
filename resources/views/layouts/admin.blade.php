<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bankruptcy</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<script src="{{ asset('assets/plugins/jquery/js/jquery.min.js' )}}"></script>
	<script src="{{ asset('assets/js/vendor-all.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <!-- [ navigation menu ] start -->
    @include("layouts.admin.sidebar")  
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    @include("layouts.admin.navbar")
    <!-- [ Header ] end -->
	<!-- [ pcoded-main-container ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                           @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ pcoded-main-container ] end -->	
	<!-- Required Js -->
	 
    
	<script src="{{ asset('assets/js/pcoded.min.js')}}"></script>
</body>
</html>
