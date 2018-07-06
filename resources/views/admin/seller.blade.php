@extends('layouts.admin.master')


@section('content')
<!-- <button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Subtype <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br> -->
<h4 class="page-title">Application</h4>

<div class="row">

        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Application</div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered" id="user-table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Seller Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>View Application</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applications as $key => $application)
                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$application->user->firstname}} {{$application->user->lastname}}</td>
                                    <td><span class="badge badge-default">{{$application->user->email}}</span></td>
                                    <td><span class="badge badge-default">{{$application->user->profile->phone}}</span></td>
                                   
                                    <td><a href="{{url('admin/manage/seller/application')}}/{{$application->id}}" title="View this user" class="btn btn-info btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-user"></i> View</a></td>                             
                                    <td><button title="Delete this user" onclick="deleteApplication({{$application->id}})" {{$application->id == auth()->user()->id ? 'disabled' : ''}} class="btn btn-danger btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-trash"></i></button></td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   
    
</div>




@endsection

@section('custom-script')

<script>
    $("#user-table").DataTable();
        function banUser(id){
            var complete = confirm('Are you sure you want to ban this user?');
            // console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/user/ban/'+id)
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                    error('Error', response.data.message);
                });
        }

        function verifyUser(id){
            var complete = confirm('Are you sure you want to verify this user as a seller?');
            if(!complete){
                return;
            }

            axios.post('/admin/manage/user/verify/'+id)
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                    error('Error', response.data.message);
                });
        }

        function unverifyUser(id){
            var complete = confirm('Are you sure you want to cancel seller verification?');
            if(!complete){
                return;
            }

            axios.post('/admin/manage/user/unverify/'+id)
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                    error('Error', response.data.message);
                });
        }


        function unbanUser(id){
            var complete = confirm('Are you sure you want to unban this user?');
            // console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/user/unban/'+id)
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                    error('Error', response.data.message);
                });
        }

        function deleteApplication(id){
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