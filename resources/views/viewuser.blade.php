@extends('layouts.auth.master')

@section('content')
<div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">{{$seller->firstname}} {{$seller->lastname}}</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Seller Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="login section-padding">
        <div class="container">
            <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-4 col-md-pull-2 col-xs-12">
                    <img width="200px" src="{{$seller->profile->avatar == null ? '/img/avatar/avatar.png' : $seller->profile->avatar}}">
                    
                </div>
                <div class="col-md-6 col-xs-12">
                    <p><b>Name:</b> {{$seller->firstname}} {{$seller->lastname}}</p>
                    <hr>
                    <p><b> Username:</b>  {{$seller->username}}</p>
                    <hr>
                    <p><b> Verification badge:</b>  
                        @if($seller->verified_seller)
                        <img width="30px" src="{{asset('img/badge.svg')}}">
                        @else
                            None
                        @endif
                    </p>
                    <hr>
                    <p><b> Total Adverts:</b>  {{$seller->advert->count()}}</p>
                    <hr>
                    <p>
                    
                    <ul class="footer-social">
                        <li>
                        <b> Socials:</b>
                        </li>
                        <li>
                            <a class="facebook" href="{{$seller->profile->facebook}}">
                                <i class="lni-facebook-filled"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" href="{{$seller->profile->twitter}}">
                                <i class="lni-twitter-filled"></i>
                            </a>
                        </li>
                        <li>
                            <a class="linkedin" href="{{$seller->profile->linkedin}}">
                                <i class="lni-linkedin-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a class="google-plus" href="{{$seller->profile->google}}">
                                <i class="lni-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
