@extends('layouts.admin.master')


@section('content')
<!-- <button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Subtype <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br> -->
<h4 class="page-title">Users</h4>

<div class="row">

        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Users</div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered" id="user-table">
                            <thead>
                                <tr class="text-center">
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Ban</th>
                                    <th>Seller</th>
                                    <th>View User</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$user->firstname}} {{$user->lastname}}</td>
                                    <td><span class="badge badge-default">{{$user->email}}</span></td>
                                    <td><span class="badge badge-default">{{$user->profile->phone}}</span></td>
                                    @if(is_null($user->deleted_at))
                                    <td><button title="Ban this user" {{$user->id == auth()->user()->id ? 'disabled' : ''}} onclick="banUser({{$user->id}})" class="btn btn-warning btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-user"></i> Ban</button></td>  
                                    @else
                                    <td><button title="Unban this user" onclick="unbanUser({{$user->id}})" class="btn btn-success btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-user"></i> unBan</button></td>  
                                    
                                    @endif
                                    @if(!$user->verified_seller)
                                        @if($user->application->count() > 0)
                                        <td><button title="Verify this user" {{$user->deleted_at != null ? 'disabled' : ''}} onclick="verifyUser({{$user->id}})" class="btn btn-success btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-user"></i> Verify as Seller</button></td>  
                                        @else

                                            <td><label class="label label-default"><i style="font-size: 16px; font-weight: bold;" class="la la-user"></i> User hasnt applied</label></td>
                                        
                                        @endif
                                    @else
                                        
                                            <td><button title="Demote this seller" {{$user->deleted_at != null ? 'disabled' : ''}} onclick="unverifyUser({{$user->id}})" class="btn btn-primary btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-user"></i> Cancel Verification</button></td>
                                        
                                            
                                    @endif
                                    <td><a href="{{url('admin/manage/user/view')}}/{{$user->id}}" title="View this user" class="btn btn-info btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-user"></i> View</a></td>                             
                                    <td><button title="Delete this user" onclick="deleteUser({{$user->id}})" {{$user->id == auth()->user()->id ? 'disabled' : ''}} class="btn btn-danger btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-trash"></i></button></td>
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