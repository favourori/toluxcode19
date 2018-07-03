@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">My Adverts</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Advert</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('sidebar')
@include('layouts.user.sidebar')
@endsection

@section('dashboard-space')

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="page-content">
            <div class="inner-box">
                <div class="dashboard-box">
                    <h2 class="dashbord-title">My Adverts</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div class="row">
                    @foreach($adverts as $key => $advert)
                    <div class="col-md-6">
                        <a href="{{url('advertdetail')}}/{{$advert->encoded_id}}/{{str_replace(' ', '-', $advert->title)}}" class="card">
                            <!-- <img class="card-img-top" src="holder.js/100px180/" alt=""> -->
                            <div class="card-body" style="color: grey">
                                <h5 class="card-title text-center">{{$advert->title}}</h5>
                                <img src="{{asset($advert->image[0]->image)}}" class="card-img-top">
                                <br><br>
                                <h6 class="card-text text-center">
                                Description
                                   
                                </h6>
                                <p title="{{$advert->description}}" class="text-center" style="font-size: 16px;">{{substr($advert->description, 0, 80)}}</p>
                            </div>
                        </a>
                        <i class="lni-trash clickable-icon" title="Delete this advert" onclick="deleteAdvert({{$advert->id}})" style="font-weight: bold; font-size: 18px; color: red"></i>
                        <!-- <hr> -->
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom-script')

<script>
   
         function readIMG(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#drawimage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // $("#image").change(function(){
        //     readIMG(this);
        // });

        function deleteAdvert(id){
            var complete = confirm('Are you sure you want to delete this advert?');
            console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/account/advert/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', 'Advert Deleted');
                    location.reload();
                })
                .catch(err => {
                    error('Oops!', err.response.data.message);
                });
        }
</script>
@endsection



<!-- <div class="overlay" style="
    position:  absolute;
    background-color:  black;
    width: 100%;
    top: 0;
    bottom:  0;
    display:  block;
    opacity: 0.6;
    /* margin: 2px 15px 2px 15px; */
    /* padding: 10px; */
    z-index: 2000;
"></div> -->





