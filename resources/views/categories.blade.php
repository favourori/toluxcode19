
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
                            <form class="search-form">
                                <div class="form-group tg-inputwithicon">
                                    <i class="lni-tag"></i>
                                    <input type="text" name="customword" class="form-control" placeholder="What are you looking for">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <i class="lni-map-marker"></i>
                                    <div class="tg-select">
                                        <select>
                                            <option value="none">All Locations</option>
                                            <option value="none">New York</option>
                                            <option value="none">California</option>
                                            <option value="none">Washington</option>
                                            <option value="none">Birmingham</option>
                                            <option value="none">Chicago</option>
                                            <option value="none">Phoenix</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <i class="lni-layers"></i>
                                    <div class="tg-select">
                                        <select>
                                        <option value="none">Select a Category</option>
                                        
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-common" type="button">
                                    <i class="lni-search"></i>
                                </button>
                            </form>
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
                            <span>Showing (1 - 12 products of 7371 products)</span>
                        </div>
                        <div class="Show-item">
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
                        </div>
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
                                                                <i class="lni-map-marker"></i>New York</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-user"></i> John Smith</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-tag"></i> Mobile</a>
                                                        </li>
                                                    </ul>
                                                    <div class="btn-list">
                                                        <a class="btn-price" href="#">$ 25</a>
                                                        <a class="btn btn-common" href="ads-details.html">
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
                                                                <i class="lni-map-marker"></i>New York</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
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
                                                        <a class="btn btn-common" href="{{url('advert')}}/{{str_replace(' ', '-', $category->advert[0]->title)}}">
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