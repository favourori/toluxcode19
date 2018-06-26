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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$user->firstname}} {{$user->lastname}}</td>
                                    <td><span class="badge badge-default">{{$user->email}}</span></td>
                                    <td><span class="badge badge-default">{{$user->profile->phone}}</span></td>
                                    <td><button title="Delete this user" onclick="deleteUser({{$user->id}})" class="btn btn-danger btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-trash"></i></button></td>
                                    <td><button title="Edit this user" class="btn btn-info btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-edit"></i></button></td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   
    <div class="modal fade" id="create-type">
        <div class="modal-dialog" style="border-radius: 0em;">
            <div class="modal-content" style="padding: 15px;">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h6 class="modal-title">Create New Subtype</h6>
                    <hr>
                </div>
                <div class="modal-body">
                    
                    <form action="{{route('admin.user.create')}}" enctype="multipart/form-data" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label>subType name</label>
                            <input type="text" class="form-control input-square" value="{{old('name')}}" name="name" required placeholder="Name of Type e.g 3 bedroom">
                            @if ($errors->has('name'))
                                <span class="error">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                           
                           <select type="text" class="form-control input-square"  name="type_id" required>
                           <option>Select Type</option> 
                          
                            </select>
                           @if ($errors->has('type'))
                                <span class="error">
                                    {{ $errors->first('type') }}
                                </span>
                            @endif
                       </div>



                       <div class="form-group text-right">
                            <button type="submit" class="btn btn-info">Create</button>
                        </div>
                    </form>
                    
                </div>
                
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