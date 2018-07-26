@extends('layouts.admin.master')


@section('content')
<!-- <button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Subtype <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br> -->
<h4 class="page-title">Single Adverts</h4>

<div class="row">
        
        <div class="col-md-8 col-lg-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center" title="{{$advert->title}}">{{$advert->title}}</div>
                </div>
                <div class="card-body text-center">
                @foreach($advert->image as $key => $image)
                    <img src="{{$image->image}}" width="230px" class="gallery">
                @endforeach
                    <hr>
                    <p class="text-justify">{{$advert->description}}</p>
                    <hr>
                    <p class="text-left">Reported: {{$advert->report->count()}} time(s)</p>
                </div>
                <div class="card-footer">
                    <i onclick="deleteAdvert({{$advert->id}})" style="color: red; font-size: 18px;" class="la la-trash"></i>
                </div>
            </div>
        </div>
        
</div>
@endsection

@section('custom-script')
<style>
    .gallery{
        display: inline-block;
    }
</style>
<script>

        function deleteAdvert(id){
            var complete = confirm('Are you sure you want to delete this advert?');
            // console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/advert/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                   
                });
        }
</script>
@endsection
