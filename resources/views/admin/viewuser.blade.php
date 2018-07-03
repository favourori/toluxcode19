@extends('layouts.admin.master')


@section('content')
<!-- <button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Subtype <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br> -->
<h4 class="page-title">{{$user->username}}</h4>

<div class="row">

        <div class="col-md-4 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{$user->lastname}}  {{$user->firstname}}</div>
                </div>
                <div class="card-body">
                    <p>{{$user->email}}</p>
                    
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center">Total Ads By User</div>
                </div>
                <div class="card-body text-center">
                    <p>{{$user->advert->count()}}</p>
                    
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center">Subscription</div>
                </div>
                <div class="card-body text-center">
                    <p>{{$user->subscription->name}}</p>
                    
                </div>
            </div>
        </div>
   
</div>
@endsection

@section('custom-script')

<script>
    function triggerFile(){
           $("#image").trigger('click');
       }

         function readIMG(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#drawimage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function(){
            readIMG(this);
        });

        function deleteUser(id){
            var complete = confirm('Are you sure you want to delete this user?');
            console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/user/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                   
                });
        }
</script>
@endsection