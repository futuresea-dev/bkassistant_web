<div class="auth-header">
        <header class="site-header">
            <div class="container">
                <nav class="navbar">
                    <div class="brand header-brand">
                         <a href="{{url('/')}}">
                            <img src="{{ url('assets/images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="navbar-content">
                        <ul class="pcoded-inner-navbar">
						@if (Auth::check())
							<li class="nav-item">
                                <a href="{{route('logout')}}" class="nav-link "><span
                                        class="pcoded-mtext">Logout</span></a>
                            </li>
						@else
							<?php if(!empty($client) && $client==true) {?>
							<?php }else{?>
                            <li class="nav-item">
                                <a href="{{route('client_login')}}" class="nav-link "><span
                                        class="pcoded-mtext">Client Login</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('register')}}" class="nav-link "><span
                                        class="pcoded-mtext">SignUp</span></a>
                            </li>
							<?php }?>
						@endif
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>
