@extends('layouts.admin.master')


@section('content')
<button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Type <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br>
<h4 class="page-title">Types</h4>

<div class="row">

        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Types</div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Type Name</th>
                                    <th>Form Type</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($types as $key => $type)
                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$type->name}}</td>
                                    <td><span class="badge badge-default">{{$type->form_type}}</span></td>
                                    <td><button title="Delete this type" onclick="deleteType({{$type->id}})" class="btn btn-danger btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-trash"></i></button></td>
                                    <td><button title="Edit this type" data-toggle="modal" data-target='#edit-type' onclick="triggerModal({{$type->id}}, '{{$type->name}}','{{$type->form_type}}', '{{is_array($type->subcategory) ? implode(',',$type->subcategory) : '[]'}}')" class="btn btn-info btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-edit"></i></button></td>
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
                    <h6 class="modal-title">Create New Type</h6>
                    <hr>
                </div>
                <div class="modal-body">
                    
                    <form action="{{route('admin.type.create')}}" enctype="multipart/form-data" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label>Type name</label>
                            <input type="text" class="form-control input-square" value="{{old('name')}}" name="name" required placeholder="Name of Type e.g Property">
                            @if ($errors->has('name'))
                                <span class="error">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            
                           <select type="text" class="form-control input-square"  name="form_type" required>
                           <option>Select Form Type</option> 
                           @foreach($form_types as $key => $form_type)
                                    
                                    <option value="{{$form_type}}">{{$form_type}}</option>
                            @endforeach
                            </select>
                           @if ($errors->has('form_type'))
                                <span class="error">
                                    {{ $errors->first('form_type') }}
                                </span>
                            @endif
                       </div>

                       <div class="form-group">
                       <label>Select Subcategories that has this type</label>
                       <br>
                       @foreach($subcategories as $key => $subcategory)
                            <label class="form-check-label">
                                <input class="form-check-input" name="subcategory[]" type="checkbox" value="{{$subcategory->id}}">
                                <span class="form-check-sign">{{$subcategory->name}}</span>
                            </label>
                            &nbsp; &nbsp;
                        @endforeach
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
                    <h6 class="modal-title">Edit Type</h6>
                    <hr>
                </div>
                <div class="modal-body">
                    
                    <form action="" id="edit-type-form" enctype="multipart/form-data" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label>Type name</label>
                            <input type="text" class="form-control input-square" id="name" value="{{old('name')}}" name="name" required placeholder="Name of Type e.g Property">
                            @if ($errors->has('name'))
                                <span class="error">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        {{method_field('patch')}}
                        <div class="form-group">
                            
                           <select type="text" class="form-control input-square" id="form_type"  name="form_type" required>
                           <option>Select Form Type</option> 
                           @foreach($form_types as $key => $form_type)
                                    
                                    <option value="{{$form_type}}">{{$form_type}}</option>
                            @endforeach
                            </select>
                           @if ($errors->has('form_type'))
                                <span class="error">
                                    {{ $errors->first('form_type') }}
                                </span>
                            @endif
                       </div>

                       <div class="form-group">
                       <label>Select Subcategories that has this type</label>
                       <br>
                       @foreach($subcategories as $key => $subcategory)
                            <label class="form-check-label">
                                <input class="form-check-input subcategory" name="subcategory[]" type="checkbox" value="{{$subcategory->id}}">
                                <span class="form-check-sign">{{$subcategory->name}}</span>
                            </label>
                            &nbsp; &nbsp;
                        @endforeach
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

function triggerModal(id, name, form_type, subcategory){
        $("#name").val(name);
        $("#form_type").val(form_type);
        var subcat = $(".subcategory");
        var selected = subcategory.split(',');
        
        subcat.each(function( index, element ) {
            var value = $(element).val();
            var a = selected.indexOf(value);
            $(element).prop("checked", false);
            if(a > -1){
                $(element).prop("checked", true);
            }
        });
        // console.log(selected);
        $("#edit-type-form").attr('action', '/admin/manage/type/edit/'+id);
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

        function deleteType(id){
            var complete = confirm('Are you sure you want to delete this type?');
            console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/type/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                   
                });
        }
</script>
@endsection