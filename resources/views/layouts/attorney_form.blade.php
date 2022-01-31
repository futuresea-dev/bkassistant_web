<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Bankruptcy</title>
	<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="{{ asset('assets/css/official_form.css')}}" media='all'>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200&display=swap"
		rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<!-- header section -->
	<header class="hide-print">
		<div class="law-header">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light attorney-nav">
					<!-- <div class="container"> -->
					<a class="navbar-brand" href="{{route('attorney_dashboard')}}">
						<div class="questionnaire-logo text-center">
							<img src="{{ asset('assets/images/logo.png')}}" alt="" width="150px">
						</div>
					</a>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item logut-btn">
								<a class="nav-link font-lg-18 text-black" href="{{ route('attorney_logout')}}">Logout </a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
     @yield('content')
</body>


<script>
	window.onscroll = function () {
		fixedPressNav(window.innerWidth)
	};
	function fixedPressNav(windowWidth) {
		let width = windowWidth.toString();
		if (width > 768) {
			if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 210) {
				document.getElementById("sidebar").className = "nav flex-column nav-pills fixed-topbar";
			} else {
				document.getElementById("sidebar").className = "nav flex-column nav-pills";
			}
		} else {
			return
		}
	}

</script>
<script>
	$(document).ready(function () {
		$(".nav-link").click(function () {
			$(".nav-link").removeClass("active");
			// $(".tab").addClass("active"); // instead of this do the below 
			$(this).addClass("active");
		});
	});
</script>
</html>
