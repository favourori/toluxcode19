@extends('layouts.admin.master')


@section('content')
<button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Subtype <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br>
<h4 class="page-title">SubTypes</h4>

<div class="row">

        <div class="col-md-7 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Subtypes</div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Subtype Name / Value</th>
                                    <th>Type name</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subtypes as $key => $subtype)
                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$subtype->name}}</td>
                                    <td><span class="badge badge-default">{{$subtype->type->name}}</span></td>
                                    <td><button title="Delete this subtype" onclick="deleteSubType({{$subtype->id}})" class="btn btn-danger btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-trash"></i></button></td>
                                    <td><button title="Edit this subtype" data-toggle="modal" data-target='#edit-type' onclick="triggerModal({{$subtype->id}}, '{{$subtype->name}}', {{$subtype->type_id}})" class="btn btn-info btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-edit"></i></button></td>
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
                    
                    <form action="{{route('admin.subtype.create')}}" enctype="multipart/form-data" method="POST" role="form">
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
                           @foreach($types as $key => $type)
                                    
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
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

    <div class="modal fade" id="edit-type">
        <div class="modal-dialog" style="border-radius: 0em;">
            <div class="modal-content" style="padding: 15px;">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h6 class="modal-title">Edit Subtype</h6>
                    <hr>
                </div>
                <div class="modal-body">
                    
                    <form action="" enctype="multipart/form-data" id="edit-subtype-form" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label>SubType name</label>
                            <input type="text" class="form-control input-square" id="name" value="{{old('name')}}" name="name" required placeholder="Name of Type e.g 3 bedroom">
                            @if ($errors->has('name'))
                                <span class="error">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        {{method_field('patch')}}
                        <div class="form-group">
                           
                           <select type="text" class="form-control input-square" id="type_id" name="type_id" required>
                           <option>Select Type</option> 
                           @foreach($types as $key => $type)
                                    
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                            </select>
                           @if ($errors->has('type'))
                                <span class="error">
                                    {{ $errors->first('type') }}
                                </span>
                            @endif
                       </div>



                       <div class="form-group text-right">
                            <button type="submit" class="btn btn-info">Update</button>
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

    function triggerModal(id, name, type_id){
        $("#name").val(name);
        $("#type_id").val(type_id);
        
        $("#edit-subtype-form").attr('action', '/admin/manage/subtype/edit/'+id);
    }

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

        function deleteSubType(id){
            var complete = confirm('Are you sure you want to delete this subtype?');
            console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/subtype/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                   
                });
        }
</script>
@endsection