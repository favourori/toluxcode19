
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
                                            <option value="none">Select Categories</option>
                                            <option value="none">Mobiles</option>
                                            <option value="none">Electronics</option>
                                            <option value="none">Training</option>
                                            <option value="none">Real Estate</option>
                                            <option value="none">Services</option>
                                            <option value="none">Training</option>
                                            <option value="none">Vehicles</option>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="box">
                            <div class="icon">
                                <img class="img-fluid" src="{{asset('img/category/img-1.png')}}" alt="">
                            </div>
                            <h4>Vehicle</h4>
                            <strong>189 Ads</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="box">
                            <div class="icon">
                                <img class="img-fluid" src="{{asset('img/category/img-2.png')}}" alt="">
                            </div>
                            <h4>Laptops</h4>
                            <strong>255 Ads</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="box">
                            <div class="icon">
                                <img class="img-fluid" src="{{asset('img/category/img-3.png')}}" alt="">
                            </div>
                            <h4>Mobiles</h4>
                            <strong>127 Ads</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="box">
                            <div class="icon">
                                <img class="img-fluid" src="{{asset('img/category/img-4.png')}}" alt="">
                            </div>
                            <h4>Electronics</h4>
                            <strong>69 Ads</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="box">
                            <div class="icon">
                                <img class="img-fluid" src="{{asset('img/category/img-5.png')}}" alt="">
                            </div>
                            <h4>Computer</h4>
                            <strong>172 Ads</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="box">
                            <div class="icon">
                                <img class="img-fluid" src="{{asset('img/category/img-6.png')}}" alt="">
                            </div>
                            <h4>Real Estate</h4>
                            <strong>150 Ads</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="box">
                            <div class="icon">
                                <img class="img-fluid" src="{{asset('img/category/img-7.png')}}" alt="">
                            </div>
                            <h4>Home Appliances</h4>
                            <strong>249 Ads</strong>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="category.html">
                        <div class="box">
                            <div class="icon">
                                <img class="img-fluid" src="{{asset('img/category/img-8.png')}}" alt="">
                            </div>
                            <h4>Jobs</h4>
                            <strong>14 9Ads</strong>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Latest Products</h1>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <i class="lni-heart"></i>
                            </div>
                            <a href="#">
                                <img class="img-fluid" src="{{asset('img/featured/img-12.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="feature-content">
                            <div class="tg-product">
                                <a href="#">Furnitures > Office</a>
                            </div>
                            <h4>
                                <a href="ads-details.html">Office Furnitures</a>
                            </h4>
                            <span>Last Updated: 5 hours ago</span>
                            <ul class="address">
                                <li>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> New York</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> 17 Mar, 8:30 pm</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i> David Givens</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-package"></i> Used</a>
                                </li>
                            </ul>
                            <div class="btn-list">
                                <a class="btn-price" href="#">$ 1280</a>
                                <a class="btn btn-common" href="ads-details.html">
                                    <i class="lni-list"></i>
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <i class="lni-heart"></i>
                            </div>
                            <a href="#">
                                <img class="img-fluid" src="{{asset('img/featured/img2.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="feature-content">
                            <div class="tg-product">
                                <a href="#">Loptop > Accessories</a>
                            </div>
                            <h4>
                                <a href="ads-details.html">Fresh Macbook Pro 2017</a>
                            </h4>
                            <span>Last Updated: 8 hours ago</span>
                            <ul class="address">
                                <li>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> New York</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> 7 Mar, 10:10 pm</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i> John Smith</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-package"></i> Used</a>
                                </li>
                            </ul>
                            <div class="btn-list">
                                <a class="btn-price" href="#">$ 1100</a>
                                <a class="btn btn-common" href="ads-details.html">
                                    <i class="lni-list"></i>
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <i class="lni-heart"></i>
                            </div>
                            <a href="#">
                                <img class="img-fluid" src="{{asset('img/featured/img-11.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="feature-content">
                            <div class="tg-product">
                                <a href="#">Electronics > Naturial</a>
                            </div>
                            <h4>
                                <a href="ads-details.html">Canon Photography Camera</a>
                            </h4>
                            <span>Last Updated: 4 hours ago</span>
                            <ul class="address">
                                <li>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> Delaware</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> 7 Feb, 6:10 pm</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i> Justyna M.</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-package"></i> Used</a>
                                </li>
                            </ul>
                            <div class="btn-list">
                                <a class="btn-price" href="#">$ 205</a>
                                <a class="btn btn-common" href="ads-details.html">
                                    <i class="lni-list"></i>
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <i class="lni-heart"></i>
                            </div>
                            <a href="#">
                                <img class="img-fluid" src="{{asset('img/featured/img1.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="feature-content">
                            <div class="tg-product">
                                <a href="#">Mobiles > Accessories</a>
                            </div>
                            <h4>
                                <a href="ads-details.html">Apple iPhone X</a>
                            </h4>
                            <span>Last Updated: 13 hours ago</span>
                            <ul class="address">
                                <li>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> Albama</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> 3 Jan, 9:05 pm</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i> Mh Arman</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-package"></i> Brand New</a>
                                </li>
                            </ul>
                            <div class="btn-list">
                                <a class="btn-price" href="#">$ 799</a>
                                <a class="btn btn-common" href="ads-details.html">
                                    <i class="lni-list"></i>
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <i class="lni-heart"></i>
                            </div>
                            <a href="#">
                                <img class="img-fluid" src="{{asset('img/featured/img-09.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="feature-content">
                            <div class="tg-product">
                                <a href="#">Loptop > Accessories</a>
                            </div>
                            <h4>
                                <a href="ads-details.html">Amazing Room for Rent</a>
                            </h4>
                            <span>Last Updated: 4 hours ago</span>
                            <ul class="address">
                                <li>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> Chicago</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> 1 Jan, 7:00 pm</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i> Elon Musk</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-package"></i> N/A</a>
                                </li>
                            </ul>
                            <div class="btn-list">
                                <a class="btn-price" href="#">$ 250</a>
                                <a class="btn btn-common" href="ads-details.html">
                                    <i class="lni-list"></i>
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <i class="lni-heart"></i>
                            </div>
                            <a href="#">
                                <img class="img-fluid" src="{{asset('img/featured/img-10.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="feature-content">
                            <div class="tg-product">
                                <a href="#">Office > Stationary</a>
                            </div>
                            <h4>
                                <a href="ads-details.html">Custom Notebooks</a>
                            </h4>
                            <span>Last Updated: 12 hours ago</span>
                            <ul class="address">
                                <li>
                                    <a href="#">
                                        <i class="lni-map-marker"></i> Washington</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> 12 Dec, 10:10 pm</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-user"></i> John Smith</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni-package"></i> Brand New</a>
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
            </div>
        </div>
    </section>


    <section class="featured-lis section-padding">
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
                    <form>
                        <div class="subscribe">
                            <input class="form-control" name="email" placeholder="Your email here" required="" type="email">
                            <button class="btn btn-common" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection