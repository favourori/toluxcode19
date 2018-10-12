@extends('layouts.auth.master')

@section('content')
<div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Join Us</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="register section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="register-form login-area">
                        <h3>
                            Register
                        </h3>
                        <form action="{{Route('register')}}" id="register" class="login-form" method="post">
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" class="form-control"  value="{{old('firstname')}}" name="firstname" placeholder="Firstname" required>
                                    
                                </div>
                                @if ($errors->has('firstname'))
                                    <span class="error">
                                        {{ $errors->first('firstname') }}
                                    </span>
                                @endif
                            </div>
                            @csrf
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" class="form-control" value="{{old('lastname')}}" name="lastname" placeholder="Last name" required>
                                    
                                </div>
                                @if ($errors->has('lastname'))
                                    <span class="error">
                                        {{ $errors->first('lastname') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" class="form-control" value="{{old('username')}}" name="username" placeholder="Username" required>
                                    
                                </div>
                                @if ($errors->has('username'))
                                    <span class="error">
                                        {{ $errors->first('username') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-envelope"></i>
                                    <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Email" required>
                                    
                                </div>
                                @if ($errors->has('email'))
                                    <span class="error">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    
                                </div>
                                @if ($errors->has('password'))
                                    <span class="error">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Retype Password" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <input type="checkbox" id="agree">
                                    <label>By registering, you accept our Terms & Conditions</label>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                Already have an account ?
                                <a style="color: #00cc67" href="/login">Login</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="register-button" class="btn btn-common btn-block log-btn">Register</button>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="button" id="register-with-facebook" class="btn btn-common btn-primary btn-block"><i class="lni-facebook-filled"> </i> Signup with facebook</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
