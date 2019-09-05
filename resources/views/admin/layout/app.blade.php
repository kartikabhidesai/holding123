<!DOCTYPE html>
<html lang="en">
    @include('admin.include.header')
    <body>
      @include('admin.include.loader')
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
                    @include('admin.include.bodyheader')
                    <div class="pcoded-main-container">
                        <div class="pcoded-wrapper">
                            @include('admin.include.sidebar')
                            <div class="pcoded-content">
                                <div class="pcoded-inner-content">
                                    <div class="main-body">
                                        <div class="page-wrapper">
                                            @include('admin.include.breadcrumb')
                                          @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @include('admin.include.bodyfooter')
      @include('admin.include.footer')
    </body>
</html>
