
@extends('layouts.user.master')

@section('landing')


<div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="contents">
                    <!-- <h1 class="head-title">
                        <span class="year"></span>
                    </h1>
                    -->
                    <div class="search-bar">
                        <fieldset>
                        <div id="root">
                            <form method="post" @submit.prevent="searchAdvert()" action="{{route('advert.search')}}" class="search-form">
                                <div class="form-group tg-inputwithicon">
                                    <i class="lni-tag"></i>
                                    <input type="text" v-model="param" class="form-control" placeholder="What are you looking for">
                                </div>
                                @csrf
                             
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

@endsection

@section('content')
<div class="main-container section-padding">
        <div class="container">
            <div class="row">
                @include('layouts.user.categorybar')
                <div class="col-lg-9 col-md-12 col-xs-12 page-content">

                    <div class="product-filter">
                        <div class="short-name">
                            <span>Showing (1 - {{$adverts->count() < 12 ? $adverts->count() : 12}} product(s) of {{$adverts->count()}} products)</span>
                        </div>
                        <!-- <div class="Show-item">
                            <span>Show Items</span>
                            <form class="woocommerce-ordering" method="post">
                                <label>
                                    <select name="order" class="orderby">
                                        <option selected="selected" value="menu-order">49 items</option>
                                        <option value="popularity">popularity</option>
                                        <option value="popularity">Average ration</option>
                                        <option value="popularity">newness</option>
                                        <option value="popularity">price</option>
                                    </select>
                                </label>
                            </form>
                        </div> -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#grid-view">
                                    <i class="lni-grid"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#list-view">
                                    <i class="lni-list"></i>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="adds-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade">
                                <div class="row">
                                    
                                    @foreach($categories as $key => $category)
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="featured-box">
                                                <figure>
                                                    <div class="icon">
                                                        <i class="lni-heart"></i>
                                                    </div>
                                                    <a href="#">
                                                        <img class="img-fluid center-block" src="{{asset($category->advert[0]->image[0]->image)}}" alt="">
                                                    </a>
                                                </figure>
                                                <div class="feature-content">
                                                    <div class="tg-product">
                                                        <a href="#">{{$category->name}} > {{$category->advert[0]->subcategory->name}}</a>
                                                    </div>
                                                    <h4>
                                                        <a href="ads-details.html">Apple iPhone X</a>
                                                    </h4>
                                                    <span>Last Updated: {{$category->advert[0]->updated_at->diffForHumans()}}</span>
                                                    <ul class="address">
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-map-marker"></i>{{$category->advert[0]->state->name}} | {{$category->advert[0]->country->name}}</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-alarm-clock"></i> {{$category->advert[0]->updated_at->toFormattedDateString()}}</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-user"></i> {{$category->advert[0]->user->username}}</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-tag"></i> {{$category->advert[0]->phone}}</a>
                                                        </li>
                                                    </ul>
                                                    <div class="btn-list">
                                                        <a class="btn-price" href="#">&#8358; {{$category->advert[0]->price}}</a>
                                                        <a class="btn btn-common" href="{{url('advertdetail')}}/{{$category->advert[0]->encoded_id}}/{{str_replace(' ', '-', $category->advert[0]->title)}}">
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
                            <div id="list-view" class="tab-pane fade active show">
                                <div class="row">
                                @foreach($categories as $key => $category)
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="featured-box">
                                                <figure>
                                                    <div class="icon">
                                                        <i class="lni-heart"></i>
                                                    </div>
                                                    <a href="#">
                                                        <img class="img-fluid center-block" src="{{asset($category->advert[0]->image[0]->image)}}" alt="">
                                                    </a>
                                                </figure>
                                                <div class="feature-content">
                                                    <div class="tg-product">
                                                        <a href="#">{{$category->name}} > {{$category->advert[0]->subcategory->name}}</a>
                                                    </div>
                                                    <h4>
                                                        <a href="ads-details.html">{{$category->advert[0]->title}}</a>
                                                    </h4>
                                                    <span>Last Updated: {{$category->advert[0]->updated_at->diffForHumans()}}</span>
                                                    <ul class="address">
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-map-marker"></i>{{$category->advert[0]->state->name}} | {{$category->advert[0]->country->name}}</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-alarm-clock"></i> {{$category->advert[0]->updated_at->toFormattedDateString()}}</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-user"></i> {{$category->advert[0]->user->username}}</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-tag"></i> {{$category->advert[0]->phone}}</a>
                                                        </li>
                                                    </ul>
                                                    <div class="btn-list">
                                                        <a class="btn-price" href="#">&#8358; {{$category->advert[0]->price}}</a>
                                                        <a class="btn btn-common" href="{{url('advertdetail')}}/{{$category->advert[0]->encoded_id}}/{{str_replace(' ', '-', $category->advert[0]->title)}}">
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
                        </div>
                    </div>


                    <div class="pagination-bar">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection