
@extends('layouts.user.master')

@section('landing')


<div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 text-center">
                <div class="contents">
                    <h1 class="head-title">Welcome to
                        <span class="year">ClassiAlly</span>
                    </h1>
                    <p>Buy And Sell Everything From Used Cars To Mobile Phones And Computers,
                        <br> Or Search For Property, Jobs And More</p>
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
                                        @foreach($categories as $key => $category)
                                        <option value="none">Select a Category</option>
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
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
<section class="trending-cat section-padding">
        <div class="container">
            <h1 class="section-title">Product Categories</h1>
            <div class="row">
                @foreach($categories as $key => $category)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="">
                            <div class="box">
                                <div class="icon">
                                    <img class="img-fluid" src="{{asset($category->image)}}" alt="">
                                </div>
                                <h4>{{$category->name}}</h4>
                                <strong>{{count($category->advert)}} Ads</strong>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Recommended For you</h1>
            <div class="row">
            @foreach($adverts as $key => $advert)                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <i class="lni-heart"></i>
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
                                        <i class="lni-map-marker"></i>New York</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
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
            @endforeach
               
            </div>
        </div>
    </section>


    <!-- <section class="featured-lis section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <h3 class="section-title">Featured Products</h3>
                    <div id="new-products" class="owl-carousel">
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{asset('img/product/img1.jpg')}}" alt="">
                                    <div class="overlay">
                                    </div>
                                    <span class="price">$ 89.00</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="ads-details.html">Beats Headphone</a>
                                    </h3>
                                    <a href="#">
                                        <i class="lni-bookmark"></i> New York</a>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> California</a>
                                    <div class="icon">
                                        <i class="lni-heart"></i>
                                    </div>
                                    <div class="card-text">
                                        <div class="meta">
                                            <div class="float-left">
                                                <span class="icon-wrap">
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star"></i>
                                                    <i class="lni-star"></i>
                                                </span>
                                                <span class="count-review">
                                                    <span>1</span> Reviews
                                                </span>
                                            </div>
                                            <div class="float-right">
                                                <span class="btn-product bg-red">
                                                    <a href="#">New</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{asset('img/product/img2.jpg')}}" alt="">
                                    <div class="overlay">
                                    </div>
                                    <span class="price">$ 89.00</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="ads-details.html">Coffee Maker</a>
                                    </h3>
                                    <a href="#">
                                        <i class="lni-bookmark"></i> Delaware</a>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> Xyz</a>
                                    <div class="icon">
                                        <i class="lni-heart"></i>
                                    </div>
                                    <div class="card-text">
                                        <div class="meta">
                                            <div class="float-left">
                                                <span class="icon-wrap">
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star"></i>
                                                </span>
                                                <span class="count-review">
                                                    <span>1</span> Reviews
                                                </span>
                                            </div>
                                            <div class="float-right">
                                                <span class="btn-product bg-yellow">
                                                    <a href="#">Sale</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{asset('img/product/img3.jpg')}}" alt="">
                                    <div class="overlay">
                                    </div>
                                    <span class="price">$ 49.00</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="ads-details.html">Gaming PC</a>
                                    </h3>
                                    <a href="#">
                                        <i class="lni-bookmark"></i> New York</a>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> California</a>
                                    <div class="icon">
                                        <i class="lni-heart"></i>
                                    </div>
                                    <div class="card-text">
                                        <div class="meta">
                                            <div class="float-left">
                                                <span class="icon-wrap">
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star"></i>
                                                    <i class="lni-star"></i>
                                                </span>
                                                <span class="count-review">
                                                    <span>1</span> Reviews
                                                </span>
                                            </div>
                                            <div class="float-right">
                                                <span class="btn-product bg-red">
                                                    <a href="#">New</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{asset('img/product/img4.jpg')}}" alt="">
                                    <div class="overlay">
                                    </div>
                                    <span class="price">$ 11.99</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="ads-details.html">Apple IPhone</a>
                                    </h3>
                                    <a href="#">
                                        <i class="lni-bookmark"></i> New York</a>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> California</a>
                                    <div class="icon">
                                        <i class="lni-heart"></i>
                                    </div>
                                    <div class="card-text">
                                        <div class="meta">
                                            <div class="float-left">
                                                <span class="icon-wrap">
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star"></i>
                                                </span>
                                                <span class="count-review">
                                                    <span>1</span> Reviews
                                                </span>
                                            </div>
                                            <div class="float-right">
                                                <span class="btn-product bg-yellow">
                                                    <a href="#">Sele</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{asset('img/product/img5.jpg')}}" alt="">
                                    <div class="overlay">
                                    </div>
                                    <span class="price">$ 99.00</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="ads-details.html">MacBook Pro</a>
                                    </h3>
                                    <a href="#">
                                        <i class="lni-bookmark"></i> New York</a>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> California</a>
                                    <div class="icon">
                                        <i class="lni-heart"></i>
                                    </div>
                                    <div class="card-text">
                                        <div class="meta">
                                            <div class="float-left">
                                                <span class="icon-wrap">
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star"></i>
                                                    <i class="lni-star"></i>
                                                </span>
                                                <span class="count-review">
                                                    <span>1</span> Reviews
                                                </span>
                                            </div>
                                            <div class="float-right">
                                                <span class="btn-product bg-red">
                                                    <a href="#">New</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{asset('img/product/img6.jpg')}}" alt="">
                                    <div class="overlay">
                                    </div>
                                    <span class="price">$ 89.00</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="ads-details.html">iPad Pro</a>
                                    </h3>
                                    <a href="#">
                                        <i class="lni-bookmark"></i> New York</a>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> California</a>
                                    <div class="icon">
                                        <i class="lni-heart"></i>
                                    </div>
                                    <div class="card-text">
                                        <div class="meta">
                                            <div class="float-left">
                                                <span class="icon-wrap">
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star"></i>
                                                </span>
                                                <span class="count-review">
                                                    <span>1</span> Reviews
                                                </span>
                                            </div>
                                            <div class="float-right">
                                                <span class="btn-product bg-yellow">
                                                    <a href="#">Sale</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{asset('img/product/img7.jpg')}}" alt="">
                                    <div class="overlay">
                                    </div>
                                    <span class="price">$ 19.00</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="ads-details.html">Mobiles</a>
                                    </h3>
                                    <a href="#">
                                        <i class="lni-bookmark"></i> New York</a>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> California</a>
                                    <div class="icon">
                                        <i class="lni-heart"></i>
                                    </div>
                                    <div class="card-text">
                                        <div class="meta">
                                            <div class="float-left">
                                                <span class="icon-wrap">
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star"></i>
                                                    <i class="lni-star"></i>
                                                </span>
                                                <span class="count-review">
                                                    <span>1</span> Reviews
                                                </span>
                                            </div>
                                            <div class="float-right">
                                                <span class="btn-product bg-red">
                                                    <a href="#">New</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{asset('img/product/img8.jpg')}}" alt="">
                                    <div class="overlay">
                                    </div>
                                    <span class="price">$ 123.00</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="ads-details.html">Nexus Phone</a>
                                    </h3>
                                    <a href="#">
                                        <i class="lni-bookmark"></i> New York</a>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> California</a>
                                    <div class="icon">
                                        <i class="lni-heart"></i>
                                    </div>
                                    <div class="card-text">
                                        <div class="meta">
                                            <div class="float-left">
                                                <span class="icon-wrap">
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                    <i class="lni-star-filled"></i>
                                                </span>
                                                <span class="count-review">
                                                    <span>1</span> Reviews
                                                </span>
                                            </div>
                                            <div class="float-right">
                                                <span class="btn-product bg-yellow">
                                                    <a href="#">Sale</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribes section-padding">
        <div class="container">
            <div class="row wrapper-sub">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p>Join our 10,000+ subscribers and get access to the latest templates, freebies, announcements and resources!</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form action="{{route('newsletter.subscribe')}}" method="post">
                        <div class="subscribe">
                           
                                @csrf
                                <input class="form-control" name="email" placeholder="Your email here" required type="email">
                                <button class="btn btn-common" type="submit">Subscribe</button>
                                
                        </div>
                        
                    </form>
                    @if ($errors->has('email'))
                                <span class="error">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                </div>
            </div>
        </div>
    </section> -->
@endsection