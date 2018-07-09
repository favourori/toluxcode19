@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Dashbord</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home /</a>
                            </li>
                            <li class="current">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('sidebar')
@include('layouts.user.sidebar')
@endsection

@section('dashboard-space')
<div class="col-sm-12 col-md-8 col-lg-9">
        <div class="page-content">
            <div class="inner-box">
                <div class="dashboard-box">
                    <h2 class="dashbord-title">Dashboard</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="card text-center">
                                <img class="card-img-top" src="holder.js/100px180/" alt="">
                                <div class="card-body" style="color: grey">
                                    <h4 class="card-title">Total Ads</h4>
                                    <h3 class="card-text">{{count(auth()->user()->advert)}}</h3>
                                </div>
                            </a>
                        </div>

                        

                       
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

