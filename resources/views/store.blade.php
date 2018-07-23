
@extends('layouts.user.master')

@section('landing')


<div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 text-center" style="margin-bottom:40px">
                <div class="contents">
                    <h1 class="head-title">Welcome to
                        <span class="year"> {{$user->store_name}}</span>
                    </h1>
                    <p>{{$user->store_description}}</p>
                    <div class="search-bar">
                       
                        
                    </div>
                </div>
                
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')


    <section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Our Awesome Products</h1>
            <div class="row">
            @foreach($adverts as $key => $advert)                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                            <img width="30px" style="display: inline; position: absolute; right: 0; top: 5px;" src="{{asset('img/badge.svg')}}">
                            </div>
                            <a href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                <img class="img-fluid center-block" src="{{asset($advert->image->first()->image)}}" alt="">
                            </a>
                        </figure>
                        <div class="feature-content">
                            <div class="tg-product">
                                <a href="#">{{$advert->category->name}} > {{$advert->subcategory->name}}</a>
                            </div>
                            <h4>
                                <a href="ads-details.html">{{$advert->title}}</a>
                            </h4>
                            <span>Last Updated: {{$advert->updated_at->diffForHumans()}}</span>
                            <ul class="address">
                                <li>
                                    <a href="#">
                                        <i class="lni-map-marker"></i>{{$advert->state->name}} | {{$advert->country->name}}</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i>{{$advert->updated_at->format('jS F h:i A')}} </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i> {{$advert->user->username}}</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-tag"></i> {{$advert->phone}}</a>
                                </li>
                            </ul>
                            <div class="btn-list">
                                <a class="btn-price" href="#">&#8358; {{number_format($advert->price, 2)}}</a>
                                <a class="btn btn-common" href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                    <i class="lni-list"></i>
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
               
            </div>
        </div>
    </section>


@endsection