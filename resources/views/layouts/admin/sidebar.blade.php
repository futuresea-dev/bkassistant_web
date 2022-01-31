<nav class="pcoded-navbar">
	<div class="navbar-wrapper">
		<div class="navbar-brand header-logo">
			<a href="{{ route('admin_dashboard')}}" className="b-brand">
				<img src="{{ asset('assets/images/logo.png')}}" alt="" />
			</a>
			<a class="mobile-menu" id="mobile-collapse" href="#"><span></span></a>
		</div>
		<div class="navbar-content scroll-div">

			<ul class="nav pcoded-inner-navbar">
				<li class="nav-item pcoded-menu-caption">
					<label>Navigation</label>
				</li>
				<li class="nav-item active">
					<a href="{{ route('admin_dashboard')}}" class="nav-link ">
						<span class="pcoded-micon"><i class="feather icon-home"></i></span>
						<span class="pcoded-mtext">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin_attorney_list')}}" class="nav-link ">
						<span class="pcoded-micon"><i class="feather icon-box"></i></span>
						<span class="pcoded-mtext">Attorney Management</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin_client_list')}}" class="nav-link ">
						<span class="pcoded-micon"><i class="feather icon-server"></i>
						</span><span class="pcoded-mtext">Client Management</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin_payment_settings')}}" class="nav-link ">
						<span class="pcoded-micon"><i class="feather icon-server"></i>
						</span><span class="pcoded-mtext">Payment settings</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>