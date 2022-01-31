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
    
    <!-- animation css -->
    <script src="https://kit.fontawesome.com/f9998fe212.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-ui/js/jquery-ui.css')}}">
	 <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
	<!-- Hotjar Tracking Code for https://www.bkassistant.net -->
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:2664727,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	<style>
	    .font66{font-size:66px;    margin-bottom: 20px;}
	    .home-header .container{
	            padding-left: 0;
    padding-right: 0;
	    }
	    .navbar{
	        padding-top: 10px;
    padding-bottom: 10px;
	    }
	    .brand.header-brand{
	        
	        width: 16.666%;
	    }
	    .brand.header-brand img{
	        
	            width: 144px;
	    }
	    .navbar-content{
	            width: 55.349%;
	    }
	     .navbar-content ul{
	         
	             display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0;
        padding-left: 10px;
    padding-right: 10px;
	     }
	     .navbar-content ul li{  -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding-left: 0;
    float: none;
    text-align: center;}
	     .navbar-content ul li a{    padding-left: 10px;
    padding-right: 10px;
    padding-top: 15px;
    padding-bottom: 15px;
    font-family: "Gotham", Sans-serif;
    font-size: 17px;
    font-weight: 400;}
    .navbar-buttons{
       width: 27.316%; 
        
    }
    .navbar-buttons{
            display: flex;
    flex-wrap: wrap;
    padding-left: 10px;
    padding-right: 10px;
    }
    .navbar-buttons .navbar-buttons1{
            width: 50%;
    padding: 10px;
    }
    .navbar-buttons .navbar-buttons2{
            width: 50%;
    padding: 10px;
    }
    .navbar-buttons a{
            font-family: "Gotham", Sans-serif;
    font-weight: 500;
    fill: #FFFFFF;
    color: #FFFFFF;
    background-color: #403b3b;
    border-radius: 50px 50px 50px 50px;
    display: block;
    text-align: center;
    font-size: 15px;
    padding: 12px 24px;
    text-align: center;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    line-height: 1;
        
    }
    .navbar-buttons a:hover{
        background-color:#012bab;
    }
    .footer-cols-wrapper{
        
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 30px 0px 20px 0px;
    max-width: 1140px;
    margin-left: auto;
    margin-right: auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-right: auto;
    margin-left: auto;
    position: relative;
    }
    .footer-cols-wrapper h2{    color: #000000;
    font-family: "Gotham", Sans-serif;
    font-size: 20px;
    font-weight: 600;
    line-height: 1.5em;
    margin-bottom: 20px;}
    .footer-cols-wrapper  .footer-col1{width: 33.33%;
    padding: 10px;}
     .footer-cols-wrapper .footer-col1 ul{    padding: 0;
    margin: 0;
    list-style: none;}
     .footer-cols-wrapper .footer-col1 ul li{margin-bottom: 14px;
    line-height: 1.5;}
     .footer-cols-wrapper .footer-col1 ul li a{color: #000;
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.5;}
   .footer-cols-wrapper .footer-col1 ul li a:hover {    color: #6489F9;}
      .footer-cols-wrapper .footer-col1 ul li:last-child{margin-bottom:0;}
         .footer-cols-wrapper  .footer-col2{width: 33.33%;
    padding: 10px;}
     .footer-cols-wrapper .footer-col2 ul{    padding: 0;
    margin: 0;
    list-style: none;}
     .footer-cols-wrapper .footer-col2 ul li{margin-bottom: 15px;
    line-height: 1.5;}
     .footer-cols-wrapper .footer-col2 ul li a{color: #000;
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.5;display: flex;}
   .footer-cols-wrapper .footer-col2 ul li a:hover {    color: #6489F9;}
     .footer-cols-wrapper .footer-col2 ul li a i{font-size:18px;    font-size: 18px;
    margin-right: 9px;
    vertical-align: text-bottom;}
     .footer-cols-wrapper .footer-col2 ul li:last-child{margin-bottom:0;}
     .footer-cols-wrapper  .footer-col3{width: 33.33%;
    padding: 10px;}
     .social-icons-wrapper{}
      .social-icons-wrapper .grid-item{margin-right: 12px;}
      .social-icons-wrapper .grid-item a{color: #000;}
      .social-icons-wrapper .grid-item a:hover{    color: #6489F9;}
      .social-icons-wrapper .grid-item a i{font-size: 18px;}
     .footer-copyright-text{
             color: #000000;
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    font-weight: 600;
    text-align: center;
    padding: 15px;
    background-color: #F8F8F8;
    line-height: 1;
     }
     .animated-section{
             padding:40px 0px 50px 0px;
     }
     .animated-section-first{
         background-color: #ECEFF5;
    margin-top: 100px;
     }
     .animated-section .animated-heading{
             color: #000000;
    font-family: "Gotham", Sans-serif;
    font-size: 34px;
    font-weight: 700;
    text-align: center;
    padding-top: 10px;
    margin-bottom: 20px;
         
     }
      .animated-section .animated-col1{padding: 10px;
    width: 25.565%;}
      .animated-section .animated-col2{    width: 40.768%;padding: 10px;}
        .animated-section .animated-col2 img{max-width: 100%;
    border-radius: 10px 10px 10px 10px;
    box-shadow: -10px 15px 20px 0px rgb(0 0 0 / 17%);}
      .animated-section .animated-col3{    width: 33.333%;
    padding: 10px;}
      .animated-section  .animated-col-wrapper{display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-right: auto;
    margin-left: auto;
    position: relative;
    padding-top: 20px;
    align-items: center;}
      .animated-section  .animated-col-wrapper h3{color: #000000;
    font-family: "Gotham", Sans-serif;
    font-size: 24px;
    font-weight: 700;
    line-height: 1.3em;
    margin-bottom: 20px;}
      .animated-section   .animated-col-wrapper h4{font-family: "Gotham", Sans-serif;
    font-size: 17.5px;
    font-weight: 700;
    margin-bottom: 10px;
    /* margin-top: 10px; */
    line-height: 1.2;}
       .animated-section   .animated-col-wrapper p{    text-align: left;
    color: #000000;
    font-family: "Montserrat", Sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.8em;
    margin-bottom: 0;}
       .animated-section .animated-col-wrapper .animated-col3 p{line-height: 1.5;
    margin-bottom: 30px;}
       .animated-section .container{
           padding-left: 10px;
    padding-right: 10px;
       }
          .animated-section .animated-col-wrapper .animated-col3 p:last-child{margin-bottom:0;}
          .animated-section-second{
              background-color: #ECEFF5;
          }
          .request-account.mt-5{
              margin-top:0 !important;
          }
          .navbar-mobile-close {
  position: absolute;
  right: 32px;
  top: 32px;
  width: 32px;
  height: 32px;
  opacity: 1;
  display:none;
}
.navbar-mobile-close:hover {
  opacity: 1;
}
.navbar-mobile-close:before, .navbar-mobile-close:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 33px;
  width: 2px;
  background-color: #000;cursor:pointer;
}
.navbar-mobile-close:before {
  transform: rotate(45deg);
}
.navbar-mobile-close:after {
  transform: rotate(-45deg);
}
.navbar-mobile{
    display:none;
}
.navbar-content ul li a:hover{
    color:#012bab;
}
@media only screen and (max-width: 1024px) {
  .navbar-mobile{
    display:block;
}
.navbar-buttons{
     display:none;
}
.home-header .navbar{
    position: unset;
    
}
.home-header .navbar-content{width: 100%;
    position: absolute;
    left: 0;
    text-align: left;
    top: 95px;
    background: #F4F4F4;
    z-index: 1000;display:none;}

.home-header .navbar-content ul{
        display: block;
}
.home-header .navbar-content ul li{
        padding-left: 0;
    float: none;
    text-align: left;
}
.home-header .navbar-content ul li a{
        font-family: "Montserrat", sans-serif;
    font-size: 17px;
    font-weight: 500;
    color: #000;
    padding: 10px 20px;
    line-height: 20px;
    
}
.home-header .navbar-mobile{
    
    position: absolute;
    right: 0;
    top: 0;
}
.home-header .navbar-mobile .navbar-mobile-open{
    right: 32px;
    top: 39px;
    position: absolute;
    cursor:pointer;
}
.home-header .navbar-mobile .navbar-mobile-open .line{
    width: 32px;
    height: 3px;
    background: #000;
}
.home-header .navbar-mobile .navbar-mobile-open .line.second{    margin-top: 5px;}
.home-header .navbar-mobile .navbar-mobile-open .line.third{    margin-top: 5px;}
.home-header .brand.header-brand img{width:144px !important;}
}
@media only screen and (max-width: 767px) {
    
    .home-header .navbar{
        padding-left: 10px;
    padding-right: 10px;
    }
    .home-header .brand.header-brand img {
    width: 126px !important;
}
.home-header .navbar-content{
    top: 86px;
}
.navbar-mobile-close{
        right: 10px;    top: 24px;
}
.home-header .navbar-mobile .navbar-mobile-open {
    right: 10px;
    top: 31px;
}
.animated-section .animated-col1 {
    padding: 10px;
    width: 100%;
}
.animated-section .animated-col2 {
    padding: 10px;
    width: 100%;
}
.animated-section .animated-col3 {
    padding: 10px;
    width: 100%;
}
.animated-section .animated-col-wrapper{
    display: block;
}
.animated-section .animated-heading{
    
    font-size: 25px;
}
.animated-section .animated-col-wrapper h3{
    
   font-size: 18px;
    text-align: center; 
}
.animated-section .animated-col-wrapper .animated-col1  p{text-align: center;
    margin-bottom: 10px;}
    .animated-section .animated-col3{
        padding-top: 20px;
    }
    .animated-section .animated-col-wrapper h4{
            text-align: center;
    }
    .animated-section .animated-col-wrapper .animated-col3 p{
        text-align: center;
    }
    .footer-cols-wrapper{
        display: block;
    text-align: center;
    }
    .footer-cols-wrapper .footer-col1 {
    width: 100%;
    padding: 10px;
    padding-bottom: 30px;
}
.footer-cols-wrapper .footer-col2 {
    width: 100%;
    padding: 10px;
    padding-bottom: 30px;
}
.footer-cols-wrapper .footer-col2 ul li a{
    justify-content: center;
}
.footer-cols-wrapper .footer-col3 {
    width: 100%;}
.font66{font-size: 40px !important;}
}
	</style>
</head>
<body>
 <div class="home-header">
        <header class="site-header">
            <div class="container">
                <nav class="navbar">
                  <div class="brand header-brand">
                        <a href="/">
                            <img src="{{ url('assets/images/logo.png')}}" alt="">
                            </a>
                        
                    </div>
                    <div class="navbar-content">
                        <ul class="pcoded-inner-navbar">
                            <li class="nav-item">
                                <a href="/" class="nav-link "><span class="pcoded-mtext">Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('register')}}" class="nav-link "><span class="pcoded-mtext">SignUp</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('login')}}" class="nav-link "><span class="pcoded-mtext">Attorney Login</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('client_login')}}" class="nav-link "><span class="pcoded-mtext">Client Login</span></a>
                            </li>
                           
                            <li class="nav-item">
                                <a href="{{route('facts')}}" class="nav-link "><span class="pcoded-mtext">FACTS</span></a>
                            </li>
                            <li class="nav-item">
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-mobile">
                       <div class="navbar-mobile-open">
                        <div class="line"></div>
                        <div class="line second"></div>
                        <div class="line third"></div>
                    </div>
                     <div class="navbar-mobile-close">
                        
                        
                    </div>
                        
                    </div>
                    <div class="navbar-buttons">
                        <div class="navbar-buttons1">
                        <a href="tel:(949)%20998-0535" class="call-us" role="button">
						
						<span class="elementor-button-text">Call Us</span>
	
					</a>	</div>
					<div class="navbar-buttons2">
        
                        <a href="mailto:info@bkassistant.net" class="email-us" role="button">
					
						<span class="elementor-button-text">Email Us</span>
		
					</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <div class="content-wrapper">
		 @yield('content')
    </div>
    <footer class="site-footer">
        
            <div class="footer-cols-wrapper">
         <div class="footer-col1">
             <h2 >Sitemap</h2>
             <ul >
							<li >
											<a href="https://bkassistant.net/register">

											<span >Signup</span>
											</a>
									</li>
								<li >
											<a href="https://bkassistant.net/login">

											<span >Attorney Login</span>
											</a>
									</li>
								<li>
											<a href="https://bkassistant.net/client/login">

											<span >Client Login</span>
											</a>
									</li>
						</ul>
         </div> 
          <div class="footer-col2">
              <h2 >Contact Us</h2>
              <ul >
							<li >
											<a href="tel:(949)%20998-0535">

												<span class="icon-list-icon">
							<i aria-hidden="true" class="fas fa-phone-alt"></i>						</span>
										<span class="icon-list-text">(949) 998-0535</span>
											</a>
									</li>
								<li>
											<a href="mailto:info@bkassistant.net">

												<span class="icon-list-icon">
							<i aria-hidden="true" class="far fa-envelope"></i>						</span>
										<span class="icon-list-text">info@bkassistant.net</span>
											</a>
									</li>
						</ul>
          </div> 
           <div class="footer-col3">
                <h2 >Social Media</h2>
                
                <div class="social-icons-wrapper">
							<span class="grid-item">
					<a href="" class="social-icon" target="_blank">
						
						<i class="fab fa-facebook"></i>					</a>
				</span>
							<span class="grid-item">
					<a href="" class="social-icon" target="_blank">
						
						<i class="fab fa-twitter"></i>					</a>
				</span>
							<span class="grid-item">
					<a href="" class="social-icon" target="_blank">
					
						<i class="fab fa-youtube"></i>					</a>
				</span>
					</div>
           </div> 
            </div>
            <div class="footer-copyright-text">Copyright © 2021 BK Assistant. All rights reserved.</div>
       
    </footer>


	<script>
		$('#play1').on('click', function (e) {
            e.preventDefault();
            $("#player1")[0].src += "?autoplay=1";
            $('#player1').show();
            $('#video-cover1').hide();
            $('#play1').hide();
        });
        (function() {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('.hidden');
    windowHeight = window.innerHeight;
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('animate__animated');
        element.classList.add('animate__fadeInLeft');
        element.classList.add('animate__slow');
        element.classList.remove('hidden');
      }
    }
  }

  window.addEventListener('scroll', checkPosition);
  window.addEventListener('resize', init);

  init();
  checkPosition();
})();
        (function() {
  var elements;
  var windowHeight;

  function init2() {
    elements = document.querySelectorAll('.hidden2');
    windowHeight = window.innerHeight;
  }

  function checkPosition2() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('animate__animated');
        element.classList.add('animate__fadeInRight');
        element.classList.add('animate__slow');
        element.classList.remove('hidden');
      }
    }
  }

  window.addEventListener('scroll', checkPosition2);
  window.addEventListener('resize', init2);

  init2();
  checkPosition2();
})();
jQuery(".home-header .navbar-mobile .navbar-mobile-open").click(function(){
    jQuery(".home-header .navbar-content").slideDown();
    jQuery(this).hide();
    jQuery(".navbar-mobile-close").show();
    
});
jQuery(".home-header .navbar-mobile .navbar-mobile-close").click(function(){
    jQuery(".home-header .navbar-content").slideUp();
    jQuery(this).hide();
    jQuery(".navbar-mobile-open").show();
    
});
	</script>

</body>
</html>
