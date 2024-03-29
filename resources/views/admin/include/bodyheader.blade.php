<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
            <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                    </a>
                    <a href="{{ route('dashboard') }}">
                            <img class="img-fluid" src="{{ url('assets/images/logo.png') }}" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                    </a>
            </div>
            <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                            
                            <li>
                                    <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" data-cf-modified-5e580de27a61ac3cd21ed0b1-="">
                                            <i class="feather icon-maximize full-screen"></i>
                                    </a>
                            </li>
                    </ul>
                    <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                                    <div class="dropdown-primary dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                    <img src="{{ url('assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                                    <span>John Doe</span>
                                                    <i class="feather icon-chevron-down"></i>
                                            </div>
                                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<!--                                                    <li>
                                                            <a href="{{ route('dashboard') }}">
                                                                    <i class="feather icon-user"></i> Profile
                                                            </a>
                                                    </li>-->
                                                    <li>
                                                            <a href="{{ route('admin') }}">
                                                                    <i class="feather icon-log-out"></i> Logout
                                                            </a>
                                                    </li>
                                            </ul>
                                    </div>
                            </li>
                    </ul>
            </div>
    </div>
</nav>