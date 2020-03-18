
@extends('layouts.user.master')

@section('landing')
<div class="page-header" style="background: url({{asset('img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">404</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home /</a>
                            </li>
                            <li class="current">404</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')


    <div class="error section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="error-content">
                        <div class="error-message">
                            <h2>404</h2>
                            <h3>
                                <span>Ooooops!</span> Something Went Wrong...</h3>
                        </div>
                            <div class="text-center">
                                <a href="{{url('/')}}" class="btn btn-common btn-lg btn-search">Go To Home</a>
                            </div>
                        
                        <!-- <div class="description">
                            <span>Or Goto
                                <a href="#">Homepage</a>
                            </span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection