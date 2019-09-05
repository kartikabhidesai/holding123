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
                                    <h3 class="text-center">Forgot Password</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="firstname" id="firstname" class="form-control" required="" placeholder="Enter Your Email">
                                <span class="form-bar"></span>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">SEND</button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Back to login?</p>
                                    <p class="text-inverse text-left"><a href="{{ route('admin') }}"><b class="f-w-600">SIGN IN</b></a></p>
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



