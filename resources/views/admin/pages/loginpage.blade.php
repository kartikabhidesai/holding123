@extends('admin.layout.loginapp')
@section('content')
<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
</div>
</div>
</div>

<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material">
                    <div class="text-center">
                        <img src="{{ url('assets/images/logo.png') }}" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Sign In</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control" required="" placeholder="Your Email Address">
                                <span class="form-bar"></span>
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" name="password" class="form-control" required="" placeholder="Password">
                                <span class="form-bar"></span>
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="forgot-phone text-right f-right">
                                    <a href="{{ route('forgotpassword') }}" class="text-right f-w-600">Forgot Password?</a>
                                </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20"><a href="{{ route('dashboard') }}"><b class="f-w-600">Sign in</b></a></button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Haven't Account?</p>
                                        <p class="text-inverse text-left"><a href="{{ route('register') }}"><b class="f-w-600">SIGN UP</b></a></p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ url('assets/images/auth/Logo-small-bottom.png') }}" alt="small-logo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection



