
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
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="featured-box" title="{{$advert->title}}">
                        <figure style="margin-bottom: 10px;">
                            <div class="icon">
                                <!-- <i class="lni-heart"></i> -->
                                <img width="30px" style="display: inline; position: absolute; right: 0; top: 5px;" src="{{asset('img/badge.svg')}}">
                            </div>
                            <a href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                <img class="img-fluid center-block" src="{{asset($advert->image->first()->image)}}" alt="">
                            </a>
                            
                        </figure>
                        <div class="feature-content">
                            
                            <h4>
                            
                                <a href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">{{substr($advert->title, 0, 20)}}</a>
                            </h4>
                            <ul class="address" style="display: block;">
                                <li style="font-size: 16px; width: 65%; font-weight: 700">
                                    <a href="#">
                                       
                                    &#8358; {{number_format($advert->price)}} 
                                    </a>
                                </li>
                                <li style="width: 35%" class="text-right">
                                <a href="#">
                                        <i class="lni-map-marker"></i>{{$advert->state->name}}</a>
                                </li>
                            </ul>
                           
                            
                        </div>
                    </div>
                </div>
            @endforeach
               
            </div>
        </div>
    </section>


@endsection