@php
    $currRoute = Route::current()->getName();
@endphp
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigatio-lavel">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ ($currRoute == 'dashboard')  ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                
                
                <li class="{{ ($currRoute == 'demo')  ? 'active' : '' }}">
                    <a href="{{ route('demo') }}">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="pcoded-mtext">Demo</span>
                    </a>
                </li>
            </ul>
    </div>
</nav>