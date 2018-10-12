@extends('layouts.auth.master')

@section('content')
<div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Reset Password</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Reset Password</li>
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
                            Password Reset
                        </h3>
                        <form  class="login-form" action="{{route('password.email')}}" method="post">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input type="text" id="sender-email" class="form-control" name="email" required placeholder="Email">
                                </div>
                                @csrf
                                @if ($errors->has('email'))
                                    <span class="error">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                           
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-common btn-block log-btn">Submit</button>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
