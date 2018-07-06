@extends('layouts.admin.master')

@section('content')
<h4 class="page-title">Seller Applications</h4>

<div class="row">

        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-center">Application To Become a Seller <span class="badge {{$application->status ? 'badge-success' : 'badge-default'}}">{{$application->status ? 'Approved' : 'Pending'}}</span></h6>
                    <p>
                        Full name
                        <span class="pull-right">{{$application->user->firstname}} {{$application->user->lastname}}</span>
                    </p>
                    <p>
                        Username
                        <span class="pull-right">{{$application->user->username}}</span>
                    </p>
                    <p>
                        Store name
                        <span class="pull-right">{{$application->store_name}}</span>
                    </p>
                    <p>
                        Store Url
                        <span class="pull-right">{{$application->store_url}}</span>
                    </p>
                    <p>
                        Phone Number
                        <span class="pull-right">{{$application->user->profile->phone}}</span>
                    </p>

                    <p>
                        Business Document
                        <span class="pull-right">
                        <a title="Download Busines Document" target="_blank" href="{{$application->business_docs}}"><i class="la la-download" style="font-size: 25px; color: grey"></i></a></span>
                    </p>

                    <p> 
                    @if(!$application->status)
                        <button class="btn btn-success btn-sm" onclick="verifySeller({{$application->user_id}})">Approve</button>
                    @endif
                        <button class="btn btn-danger btn-sm" onclick="deleteApplication({{$application->id}})">Delete</button>
                    </p>


                </div>
            </div>
        </div>
        
</div>
            
@endsection



@section('custom-script')

<script>
    $("#user-table").DataTable();
     
        function verifySeller(id){
            var complete = confirm('Are you sure you want to verify this user as a seller?');
            if(!complete){
                return;
            }
            let data = {application_id: id};
            axios.post('/admin/manage/seller/verify', data)
                .then(response => {
                    success('Success','Seller has been verified');
                    location.reload();
                })
                .catch(err => {
                    error('Error', response.data.message);
                });
        }



        function deleteApplication(id){
            var complete = confirm('Are you sure you want to delete this application?');
            console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/seller/application/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', response.data.message);
                    location.href="/admin/manage/sellers/applications";
                })
                .catch(err => {
                   
                });
        }
</script>
@endsection