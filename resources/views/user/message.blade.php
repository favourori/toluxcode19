@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Messages</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home /</a>
                            </li>
                            <li class="current">Messages</li>
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
                    <h2 class="dashbord-title">Message</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div id="root">
                        <div class="row">
                            <div class="col-md-6">
                                <p>As User</p>
                                @foreach($user_messages as $key => $message)
                                <div class="card" @click="showChat({{$message[0]->user_id}})" style="padding: 12px 10px 10px;">
                                    <div style="display: inline-block">
                                        <img class="" src="/img/author/img1.jpg" width="40px" alt="">
                                        <div class="card-body" style="color: grey; padding: 0.25rem; display: inline-block">
                                            &nbsp; &nbsp; {{$message[0]->user->firstname}} {{$message[0]->user->lastname}} <span class="pull-right"> </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <br>
                                <hr>
                                <br>
                                <p>As Seller</p>
                                @foreach($seller_messages as $key => $message)
                                <div class="card" @click="showChat()" style="padding: 12px 10px 10px;">
                                    <div style="display: inline-block">
                                        <img class="" src="/img/author/img1.jpg" width="40px" alt="">
                                        <div class="card-body" style="color: grey; padding: 0.25rem; display: inline-block">
                                            &nbsp; &nbsp; {{$message[0]->seller->firstname}} {{$message[0]->seller->lastname}} <span class="pull-right"> </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                            <div class="col-md-6" style="background-color: white; padding: 10px; height: 500px; overflow-y: auto; overflow-x: hidden">
                                <br>
                            <user-message inline-template>
                            <div>
                            <div class="card" style="padding: 12px 10px 10px;" >
                                <div style="display: inline-block">
                                    <img class="" src="/img/author/img1.jpg" width="40px" alt="">
                                        <div class="card-body" style="color: grey; padding: 0.25rem; display: inline-block">
                                            &nbsp; &nbsp; Nwanze Franklin <span class="pull-right"> 6</span>
                                        </div>
                                </div>
                            </div>
                                <div class="row" style="padding: 10px;  ">
                                    <div class="card" style="padding: 3px 6px 3px; display: inline-block">

                                        <div class="card-body text-left" style="color: grey; padding: 0em; display: inline-block">
                                                hello franklin
                                        </div>

                                    </div>
                                </div>
                                    <div class="row pull-right" style="padding-right: 10px; padding-left: 10px;">
                                        <div class="card" style="padding: 3px 6px 3px; display: inline-block">

                                            <div class="card-body text-left" style="color: grey; padding: 0em; display: inline-block">
                                                hello franklin
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 10px; margin: 10px; position: absolute; bottom: 0; left: 0; right: 0;">
                                        
                                        <input type="text" v-model="message" class="form-control" required placeholder="Enter your message">
                                        
                                    </div>
                                </div>
                            </user-message>
                            </div>


                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

