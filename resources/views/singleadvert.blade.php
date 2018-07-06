
@extends('layouts.user.master')

@section('socials')
    <meta name="author" content="Classially">
    <meta name="description" content="your advert site">
    <meta property="og:url"   content="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}" />
    <meta property="og:type"   content="article" />
    <meta property="og:title"  content="{{$advert->title}}"/>
    <meta property="og:description"  content="{{$advert->description}}" />
    <meta property="og:image"  content="{{$advert->image[0]->image}}" />

@endsection

@section('landing')
<div class="page-header" style="background: url({{asset('/img/banner1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Ad Details</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home /</a>
                            </li>
                            <li class="current">Ad Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

<div class="section-padding">
        <div class="container">

            <div class="product-info row">
                <div class="col-lg-7 col-md-12 col-xs-12">
                    <div class="details-box ads-details-wrapper">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="{{asset($advert->image[0]->image)}}" alt="">
                                </div>
                                <span class="price">&#8358; {{number_format($advert->price,2)}}</span>
                            </div>
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="{{asset($advert->image[1]->image)}}" alt="">
                                </div>
                                <span class="price">&#8358; {{number_format($advert->price,2)}}</span>
                            </div>
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="{{asset($advert->image[2]->image)}}" alt="">
                                </div>
                                <span class="price">&#8358; {{number_format($advert->price,2)}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="details-box">
                        <div class="ads-details-info">
                            <h2>{{$advert->title}}</h2>
                            <p class="mb-2">{{substr($advert->description, 0, 80)}}</p>
                            <div class="details-meta">
                                <span>
                                    <a href="#">
                                        <i class="lni-alarm-clock"></i> {{$advert->updated_at->format('jS F h:i A')}}</a>
                                </span>
                                
                                <span>
                                    <a href="#">
                                        <i class="lni-eye"></i> 299 View</a>
                                </span>
                            </div>
                            @foreach($specification as $key => $specs)
                                @if($specs->count() > 0)
                                <h4 class="title-small mb-3" style="color: grey; font-size: 16px;">{{str_replace('_', ' ',$key)}}:</h4>
                                <ul class="list-specification">
                                    @foreach($specs as $key1 => $value)
                                    <li>
                                        <i class="lni-check-mark-circle"></i> 
                                        {{$value->name}}
                                    </li>
                                    @endforeach
                                    
                                </ul>
                                @endif
                            @endforeach
                        </div>
                        <ul class="advertisement mb-4">
                            <li>
                                <p>
                                    <strong>Type:</strong>
                                    <a href="#">{{$advert->category->name}}</a>,
                                    <a href="#">For sale</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <!-- <strong>Condition:</strong> New</p> -->
                            </li>
                            <li>
                                <p>
                                    <!-- <strong>Brand:</strong>
                                    <a href="#">Apple</a> -->
                                </p>
                            </li>
                        </ul>
                        <div class="ads-btn mb-4">
                            <a href="#" class="btn btn-common btn-reply">
                                <i class="lni-envelope"></i> Email</a>
                            <a href="#" class="btn btn-common">
                                <i class="lni-phone-handset"></i> {{$advert->phone}}</a>
                        </div>
                        <div class="share">
                            <span>Share: </span>
                            <div class="social-link">
                                <a class="facebook" target="_blank" href="https://web.facebook.com/sharer/sharer.php?u={{url('advertdetail')}}/{{$advert->encoded_id}}">
                                    <i class="lni-facebook-filled"></i>
                                </a>
                                <a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?url={{url('advertdetail')}}/{{$advert->encoded_id}}">
                                    <i class="lni-twitter-filled"></i>
                                </a>
                                <a class="linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?title={{$advert->title}}&url={{url('advertdetail')}}/{{$advert->encoded_id}}">
                                    <i class="lni-linkedin-fill"></i>
                                </a>
                                <!-- <a class="google" href="#">
                                    <i class="lni-google-plus"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="description-info">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="description">
                            <h4>Description</h4>
                            <p>{{$advert->description}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="short-info">
                            <h4>Short Info</h4>
                            <ul>
                                @if($advert->verified_seller)
                                <li>
                                    <a href="{{url('store')}}/{{$advert->user->store_url}}">
                                        <i class="lni-users"></i> More ads by
                                        <span>User</span>
                                    </a>
                                </li>
                                @endif
                                <!-- <li>
                                    <a href="#">
                                        <i class="lni-printer"></i> Print this ad</a>
                                </li> -->
                                <!-- <li>
                                    <a href="#">
                                        <i class="lni-reply"></i> Send to a friend</a>
                                </li> -->
                                @if(Auth::check())
                                <li>
                                    <a data-toggle="modal" href='#report-advert'>
                                        <i class="lni-warning"></i> Report this ad</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
    <div id="root">
    <div class="modal fade" id="report-advert">
        <div class="modal-dialog" >
            <div class="modal-content" style="padding: 15px; border-radius: 0.1em;">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title">Report Advert</h5>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" @submit.prevent="reportAdvert({{$advert->id}})" class="login-form">
                        <div class="form-group">
                            <div class="input-icon">
                                
                                <textarea type="text" required rows="4" v-model="report" class="form-control" name="report" placeholder="Why are you reporting this ad?"></textarea>
                                <span class="error" v-if="errors.hasOwnProperty('report')">@{{errors['report'][0]}}</span>
                            </div>
                        </div>
                        
                        
                        <div class="text-left">
                            <button type="submit" class="btn btn-common log-btn">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    


@endsection