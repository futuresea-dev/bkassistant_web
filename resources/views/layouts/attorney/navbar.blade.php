<header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#"><span></span></a>
            <a href="admin-dashboard.html" class="b-brand">
                <div class="b-bg">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="" />
                </div>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <!-- <h4 class="header-title">Admin Dashboard</h4> -->
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="{{ route('attorney_logout')}}" class="b-brand"> <i class="icon feather icon-user"></i> Logout </a>
                    </div>
                </li>
            </ul>
        </div>
    </header>