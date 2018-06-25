@extends('layouts.auth.master')

@section('content')
<div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Login</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">Home /</a>
                            </li>
                            <li class="current">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="login section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="login-form login-area">
                        <h3>
                            Login Now
                        </h3>
                        <form role="form" class="login-form" method="post" action="{{route('login')}}">
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" id="sender-email" class="form-control" name="email" required placeholder="Username">
                                </div>
                                @csrf
                                @if ($errors->has('email'))
                                    <span class="error">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" class="form-control" name="password" required placeholder="Password">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="error">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <input type="checkbox" name="remember" value="remember">
                                    <label>Keep me logged in</label>
                                </div>
                                <a class="forgetpassword" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-common btn-block log-btn">Submit</button>
                            </div>
                            <br>
                            <div class="text-center">
                                <button class="btn btn-common btn-primary btn-block"><i class="lni-facebook-filled"> </i> Login with facebook</button>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
