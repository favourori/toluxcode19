
@extends('layouts.user.master')

@section('landing')


<div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 text-center" style="margin-bottom:40px">
                <div class="contents">
                    <!-- <h1 class="head-title">
                        <span class="year"></span>
                    </h1>
                    -->
                    <div class="search-bar">
                    <fieldset>
                        <div id="root">
                            <form method="get"  action="{{route('advert.search.page')}}" class="search-form">
                                <div class="form-group tg-inputwithicon">
                                    <i class="lni-tag"></i>
                                    <input type="text" v-model="param" name="param" class="form-control" placeholder="What are you looking for">
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

@endsection

@section('content')
<div class="main-container section-padding">
        <div class="container">
            <div class="row">
                @include('layouts.user.categorybar')
                <div class="col-lg-9 col-md-12 col-xs-12 page-content">

                    <div class="product-filter">
                        <div class="short-name">
                            <span>Showing ({{$adverts->count() > 0 ? '1' : '0'}} - {{$adverts->count() < 12 ? $adverts->count() : 12}} product(s) of {{$adverts->count()}} products)</span>
                        </div>
                      
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#grid-view">
                                    <i class="lni-grid"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#list-view">
                                    <i class="lni-list"></i>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="adds-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show">
                                <div class="row">
                                    @if(count($adverts) > 0)
                                        @foreach($adverts as $key => $advert)
                                           
                                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="featured-box" title="{{$advert->title}}">
                        <figure style="margin-bottom: 10px;">
                            <div class="icon">
                            @if($advert->verified_seller == 1)
                                <img width="30px" style="display: inline; position: absolute; right: 0; top: 5px;" src="{{asset('img/badge.svg')}}">
                                @endif
                             </div>
                            <a href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                <img class="img-fluid center-block" src="{{asset($advert->image->first()->image)}}" alt="">
                            </a>
                            
                        </figure>
                        <div class="feature-content">
                            
                            <h4>
                            
                                <a href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">{{substr($advert->title,0,20)}}</a>
                            </h4>
                            <ul class="address" style="display: block;">
                                <li style="font-size: 16px; width: 65%; font-weight: 700">
                                    <a href="#">
                                       
                                    &#8358; {{number_format($advert->price, 2)}} 
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
                                    @else
                                        <div class="text-center" style="color: grey; width: 100%">
                                            <i style="font-size: 60px;" class="lni-search"></i> 
                                            <br><br>
                                            <h3>No result Found for this search</h3>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div id="list-view" class="tab-pane fade">
                                <div class="row">
                                @foreach($adverts as $key => $advert)
                                @if(count($advert) > 0)
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="featured-box">
                                                <figure>
                                                    <div class="icon">
                                                    @if($advert->verified_seller == 1)
                                <img width="30px" style="display: inline; position: absolute; right: 0; top: 5px;" src="{{asset('img/badge.svg')}}">
                                @endif
                                                    </div>
                                                    <a href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                                        <img class="img-fluid center-block" src="{{asset($advert->image[0]->image)}}" alt="">
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
                                                                <i class="lni-alarm-clock"></i> {{$advert->updated_at->toFormattedDateString()}}</a>
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
                                                        <a class="btn-price" href="#">&#8358; {{$advert->price}}</a>
                                                        <a class="btn btn-common" href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                                            <i class="lni-list"></i>
                                                            View Details
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                 
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="pagination-bar">
                        {{$adverts->links()}}
                      
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection