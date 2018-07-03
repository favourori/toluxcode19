@extends('layouts.admin.master')


@section('content')
<!-- <button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Subtype <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br> -->
<h4 class="page-title">Reported Adverts</h4>

<div class="row">

        @foreach($reports as $key => $report)
        <div class="col-md-4 col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Report By  {{$report->user->username}}</div>
                </div>
                <div class="card-body">
                    
                    <p><span class="badge badge-default">Advert Id</span> :  {{$report->advert->id}}</p>
                    <p><span class="badge badge-default">Advert Owner</span> : {{$report->advert->user->username}}</p>
                    <p class="text-center"><strong>Reported Advert</strong></p>
                    <p class="text-center">{{$report->advert->title}}</p>
                    <p class="text-center"><strong>Complaint</strong></p>
                    <p class="text-center">{{$report->report}}</p>
                </div>
            </div>
        </div>
        @endforeach
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