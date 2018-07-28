
@extends('layouts.user.master')

@section('landing')


<div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 text-center" style="margin-bottom:40px">
                <div class="contents">
                    <h1 class="head-title">Welcome to Property
                        <span class="year"> Warri</span>
                    </h1>
                    <p>Buy And Sell Everything From Used Cars To Mobile Phones And Computers,
                        <br> Or Search For Property, Jobs And More</p>
                    <div class="search-bar">
                        <fieldset>
                        <div id="root">
                            <form method="get"  action="{{route('advert.search.page')}}" class="search-form">
                                <div class="form-group tg-inputwithicon">
                                    <i class="lni-tag"></i>
                                    <input type="text" v-model="param" name="param" class="form-control" placeholder="What are you looking for">
                                </div>
                                
                             
                                <div class="form-group tg-inputwithicon">
                                    <i class="lni-layers"></i>
                                    <div class="tg-select">
                                        <select name="category_id" v-model="search.category_id">
                                            <option value="0">Select a Category</option>
                                            @foreach($categories as $key => $category)
                                            
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-common" type="submit">
                                    <i class="lni-search"></i>
                                </button>
                                
                            </form>
                            <div v-if="search.result" style="background-color: white; padding: 20px; " class="">
                                <div style="color: grey" class="text-left" v-for="query in search.query">
                                    <a :href="/advertdetail/+query.encoded_id +'/'+ query.title.replace(/ /g, '-')">    
                                        <img :src="query.image[0].image" width="80px">
                                        &nbsp; &nbsp; <span>@{{query.title}}  &nbsp; &nbsp;</span>
                                        
                                    </a>
                                    <span style="color: grey"> By @{{query.user.username}} @{{query.user.profile.phone}}</span>
                                    <hr>
                                </div>
                            </div>
                        </fieldset>
                        
                    </div>
                </div>
                
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<section class="trending-cat section-padding">
        <div class="container">
            <h1 class="section-title">Product Categories</h1>
            <div class="row">
                @foreach($categories as $key => $category)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="{{url('categories/filter')}}?category={{$category->id}}">
                            <div class="box" style="padding: 9px 0; margin: 0 0 0;">
                                <div class="icon" style="text-align: left; padding-left: 10px;">
                                    <img class="img-fluid" src="{{asset($category->image)}}" style="display: inline-block; width: 40px; height: 40px;" alt="">
                                    <h2 style="display: inline-block; font-size: 17px;">{{$category->name}} </h2>
                                </div>
                                <hr>
                                
                               
                            </div>
                        </a>
                        <div style="background-color: white; padding: 10px; margin-bottom: 25px; height: 210px;">
                            <ul>
                                @foreach($category->subcategory as $key1 => $subcategory)
                                    <li style="font-size: 14px;">
                                    <a class="sub" href="{{url('subcategories')}}?subcategory={{$subcategory->id}}">{{$subcategory->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Ads By Verified Sellers</h1>
            <div class="row">
            @foreach($adverts as $key => $advert)                
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <!-- <i class="lni-heart"></i> -->
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
                                        <i class="lni-map-marker"></i>{{$advert->state->name}}</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> {{$advert->updated_at->format('jS F')}}</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i> {{$advert->user->username}}</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-tag"></i> {{substr($advert->phone, 0, 4)}} .....</a>
                                </li>
                            </ul>
                            <div class="btn-list">
                                <a class="btn-price btn-xs" href="#">&#8358; {{number_format($advert->price, 2)}} </a>
                                <a class="btn btn-common" href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                    <i class="lni-list" style="font-size: 11px;"></i>
                                    Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
               
            </div>
        </div>
    </section>
<style>
    .sub{
        color: grey;   
    }
    .sub:hover{
        color: #00cc67;
    }
</style>
@endsection