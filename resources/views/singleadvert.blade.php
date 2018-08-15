 @extends('layouts.user.master') @section('socials')
<meta name="author" content="Classially">
<meta name="description" content="your advert site">
<meta property="og:url" content="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}"
/>
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$advert->title}}" />
<meta property="og:description" content="{{$advert->description}}" />
<meta property="og:image" content="{{$advert->image[0]->image}}" /> @endsection @section('landing')
<div class="page-header" style="background: url({{asset('/img/banner1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">Advert Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Home /</a>
                        </li>
                        <li class="current">Advert Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('content')

<div class="section-padding">
    <div class="container">

        <div class="product-info row">
            <div class="col-lg-7 col-md-12 col-xs-12">
                <div class="details-box ads-details-wrapper">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        @foreach($advert->image as $key => $image)
                        <div class="item">
                            <div class="product-img">
                                <img class="img-fluid" src="{{asset($image->image)}}" alt="">
                            </div>
                            <span class="price">&#8358; {{number_format($advert->price,2)}}</span>
                        </div>
                        @endforeach
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

                            <!-- <span>
                                    <a href="#">
                                        <i class="lni-eye"></i> 299 View</a>
                                </span> -->
                        </div>
                        <div class="row">
                            <h4 class="title-small mb-3 text-center" style="color: grey; font-size: 16px; width: 100%">Specifications</h4>
                            <div class="col-md-12">
                                @foreach($specification as $key => $specs) @if($specs->count() > 0)

                                <ul class="list-specification">
                                    @foreach($specs as $key1 => $value)
                                    <li>
                                        <i class="lni-check-mark-circle"></i>
                                        {{str_replace('_', ' ',$key)}} : {{$value->name}}
                                    </li>
                                    @endforeach

                                </ul>
                                @endif @endforeach
                            </div>
                            <div class="col-md-12">

                                <ul class="list-specification">
                                    @foreach($advert->specifications as $key2 => $value3)
                                    <li>
                                        <i class="lni-check-mark-circle"></i>
                                        {{$value3->specification}}
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="advertisement mb-4">
                        <li>

                            <strong>Type:</strong>
                            <a href="#">{{$advert->category->name}}</a>,
                            <a href="#">For sale</a>

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

                    <p style="font-size: 15px;">
                        <i class="lni-phone-handset"></i> {{substr($advert->phone,0, 4)}}
                        <span id="show-number">XXXXXXX</span>
                    </p>
                    <br>

                    <div class="ads-btn mb-4">

                        <a style="color: white" class="btn btn-common" onclick="showNumber(this,'{{substr($advert->phone,4, 40)}}')">
                            <i class="lni-phone-handset"></i> Show Number</a>
                    </div>
                    <div class="share">
                        <span>Share: </span>
                        <div class="social-link">
                            <a class="facebook" target="_blank" href="https://web.facebook.com/sharer/sharer.php?u={{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                <i class="lni-facebook-filled"></i>
                            </a>
                            <a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?url={{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                <i class="lni-twitter-filled"></i>
                            </a>
                            <a class="linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?title={{$advert->title}}&url={{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}">
                                <i class="lni-linkedin-fill"></i>
                            </a>
                            <!-- <a class="google" href="#">
                                    <i class="lni-google-plus"></i>
                                </a> -->
                        </div>
                    </div>
                    <br>


                </div>
            </div>
        </div>


        <div class="description-info">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-xs-12">
                    <div class="description">
                        <h4>Description</h4>
                        <p>{{$advert->description}}</p>
                    </div>

                    <div style="padding: 30px">
                        <h4>Similar Ads</h4>

                    </div>
                    <div id="list-view" class="">
                        <div class="row">
                            @foreach($similar_adverts as $key => $advert) @if(count($advert) > 0)
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="featured-box">
                                    <figure>
                                        <div class="icon">
                                            @if($advert->verified_seller)
                                            <img width="30px" style="display: inline; position: absolute; right: 0; top: 5px;" src="{{asset('img/badge.svg')}}"> @endif
                                        </div>
                                        <a href="#">
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
                            @endif @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12">
                    <div class="short-info" style="padding-left: 15px; background-color: white;">
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
                            <li>
                                <a href="{{url('seller')}}/{{$advert->encoded_user_id}}">
                                    <i class="lni-user"></i>
                                    <span>View Seller Profile</span>
                                </a>
                            </li>
                            @if(Auth::check())
                            <li>
                                <a data-toggle="modal" href='#report-advert'>
                                    <i class="lni-warning"></i> Report this ad</a>
                            </li>
                            @endif
                        </ul>

                        <div class="ads-btn mb-4">

                            <form method="post" action="{{route('message.seller', ['seller_id' => $advert->user_id])}}" method="POST" role="form">
                                @if(Auth::check())
                                <div class="form-group">
                                    <textarea rows="5" required type="text" class="form-control" name="message" placeholder="Send the seller a message"></textarea>
                                </div>
                                <input type="hidden" name="advert_id" value="{{$advert->id}}"> @endif
                                <button type="submit" class="btn btn-common btn-reply">
                                    <i class="lni-envelope"></i> Reply to this Ad</button>
                                @csrf
                            </form>


                        </div>

                    </div>
                </div>
            </div>

            
        </div>

    </div>
</div>

</div>
</div>


<div id="root">
    <div class="modal fade" id="report-advert">
        <div class="modal-dialog">
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
