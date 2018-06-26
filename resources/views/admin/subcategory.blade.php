@extends('layouts.admin.master')


@section('content')
<button type="button" data-toggle="modal" data-target='#create-subcategory' class="btn btn-info">Create Subcategory <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br>
<h4 class="page-title">SubCategories</h4>

<div class="row">
    @foreach($categories as $key => $category)
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{$category->name}}</div>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Subcategory Name</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category->subcategory as $key => $subcategory)
                                <tr>
                                    <th scope="row">{{$loop->index + 1}}</th>
                                    <td>{{$subcategory->name}}</td>
                                    <td><button title="Delete this subcategory" onclick="deleteSubCategory({{$subcategory->id}})" class="btn btn-danger btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-trash"></i></button></td>
                                    <td><button title="Edit this subcategory" class="btn btn-info btn-xs"><i style="font-size: 16px; font-weight: bold;" class="la la-edit"></i></button></td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade" id="create-subcategory">
        <div class="modal-dialog" style="border-radius: 0em;">
            <div class="modal-content" style="padding: 15px;">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h6 class="modal-title">Create New SubCategory</h6>
                    <hr>
                </div>
                <div class="modal-body">
                    
                    <form action="{{route('admin.subcategory.create')}}" enctype="multipart/form-data" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label>SubCategory name</label>
                            <input type="text" class="form-control input-square" value="{{old('name')}}" name="name" required placeholder="Name of category">
                            @if ($errors->has('name'))
                                <span class="error">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Select Category</label>
                           <select type="text" class="form-control input-square"  name="category_id" required>
                            @foreach($categories as $key => $category)
                                    <option>Select Category</option>
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                           @if ($errors->has('category_id'))
                                <span class="error">
                                    {{ $errors->first('category_id') }}
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

        function deleteSubCategory(id){
            var complete = confirm('Are you sure you want to delete this subcategory?');
            console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/subcategory/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                   
                });
        }
</script>
@endsection