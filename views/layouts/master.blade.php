<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bankruptcy</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<script src="{{ asset('assets/plugins/jquery/js/jquery.min.js' )}}"></script>
	<script src="{{ asset('assets/js/vendor-all.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.validate.js' )}}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/jquery-ui/js/jquery-ui.js' )}}"></script>
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-ui/js/jquery-ui.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">   
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
 <div class="home-page-header auth-header">
        <header class="site-header">
            <div class="container">
                <nav class="navbar">                    
                    <div class="navbar-content">
                        <ul class="pcoded-inner-navbar">
                            <li class="nav-item">
                                <a href="{{route('register')}}" class="nav-link "><span class="pcoded-mtext">SignUp</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('login')}}" class="nav-link "><span class="pcoded-mtext">Login</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('client_login')}}" class="nav-link "><span class="pcoded-mtext">Client Login</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <div class="auth-wrapper hero-section">
		 @yield('content')
    </div>
    <footer class="site-footer">
        <div class="site-footer-inner has-top-divider justify-content-center">
            <div class="footer-copyright ">Copyright © BK Assistant, Inc. All rights reserved.</div>

        </div>
    </footer>
       

	<script>
		$('#play1').on('click', function (e) {
            e.preventDefault();
            $("#player1")[0].src += "?autoplay=1";
            $('#player1').show();
            $('#video-cover1').hide();
            $('#play1').hide();
        });
	</script>
	
</body>
</html>
