<nav class="pcoded-navbar">
	<div class="navbar-wrapper">
		<div class="navbar-brand header-logo">
			<a href="{{ route('attorney_dashboard')}}" className="b-brand">
			   <img src="{{ asset('assets/images/logo.png')}}" alt="" />
			</a>
			<a class="mobile-menu" id="mobile-collapse" href="#"><span></span></a>
		</div>
		<div class="navbar-content scroll-div">
			<ul class="nav pcoded-inner-navbar">
				<li class="nav-item pcoded-menu-caption">
					<label>Navigation</label>
				</li>
				<li class="nav-item {{ request()->routeIs('attorney_dashboard') ? 'active' : ''}}">
					<a href="{{ route('attorney_dashboard')}}" class="nav-link "><span class="pcoded-micon"><i
								class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
				</li>
				<li class="nav-item {{ (request()->routeIs('attorney_client_management') ||request()->routeIs('attorney_client_uploaded_documents')) ? 'active' : ''}}">
                        <a href="{{ route('attorney_client_management')}}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-server"></i></span><span class="pcoded-mtext">Client
                                Management</span></a>
				</li>
				<li class="nav-item {{ request()->routeIs('attorney_settings') ? 'active' : ''}}">
					<a href="{{ route('attorney_settings')}}" class="nav-link "><span class="pcoded-micon"><i
								class="feather icon-settings"></i></span><span
							class="pcoded-mtext">Settings</span></a>
				</li>
				<li class="nav-item {{ request()->routeIs('attorney_transactions') ? 'active' : ''}}">
					<a href="{{ route('attorney_transactions')}}" class="nav-link "><span class="pcoded-micon"><i
								class="feather icon-repeat"></i></span><span
							class="pcoded-mtext">Transactions</span></a>
				</li>
				<li class="nav-item {{ request()->routeIs('attorney_document_mgt') ? 'active' : ''}}">
					<a href="{{ route('attorney_document_mgt')}}" class="nav-link "><span class="pcoded-micon"><i
								class="feather icon-repeat"></i></span><span
							class="pcoded-mtext">Document Management</span></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
