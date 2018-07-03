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
                            <li class="current">Reported Adverts</li>
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
                    <h2 class="dashbord-title"></h2>
                </div>
                <div class="dashboard-wrapper">
                    <div class="row">
                        @foreach($reports as $key => $report)
                        <div class="col-md-6">
                            <a href="#" class="card text-center">
                                
                                <div class="card-body" style="color: grey">
                                    <h5>Complaint</h5>
                                    <p>{{$report->report}}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

