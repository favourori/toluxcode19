@extends('layouts.admin.master')


@section('content')
<!-- <button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Subtype <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br> -->
<h4 class="page-title">Adverts</h4>

<div class="row">
        @foreach($adverts as $key => $advert)
        <div class="col-md-4 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center" title="{{$advert->title}}">{{substr($advert->title,0, 20)}} {{strlen($advert->title) > 20 ? '...' : ''}}</div>
                </div>
                <a href="{{url('admin/manage/advert')}}/{{$advert->id}}" class="card-body text-center">
                    <img src="{{$advert->image[0]->image}}" width="100%" class="center-block">
                </a>
                <div class="card-footer">
                    <i onclick="deleteAdvert({{$advert->id}})" style="color: red; font-size: 18px;" class="la la-trash"></i>
                </div>
            </div>
        </div>
        @endforeach
</div>
@endsection

@section('custom-script')

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