@extends('layouts.admin.master')


@section('content')
<button type="button" data-toggle="modal" data-target='#create-category' class="btn btn-info">Create new Category <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br>
<h4 class="page-title">Categories</h4>

<div class="row">
    @foreach($categories as $key => $category)
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center">
                        <i onclick="deleteCategory({{$category->id}})" style="padding-right: 5px; padding-top: 5px; color: red" class="clickable-icon pull-left la la-trash"></i> 
                            {{$category->name}}
                        <i style="padding-top: 5px;" class="clickable-icon pull-right la la-edit"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset($category->image)}}">
                    </div>
                    <hr>
                    <div class="text-justify">
                        {{$category->description}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade" id="create-category">
        <div class="modal-dialog" style="border-radius: 0em;">
            <div class="modal-content" style="padding: 15px;">
                <div class="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h6 class="modal-title">Create New Category</h6>
                    <hr>
                </div>
                <div class="modal-body">
                    
                    <form action="{{route('admin.category.create')}}" enctype="multipart/form-data" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control input-square" value="{{old('name')}}" name="name" required placeholder="Name of category">
                            @if ($errors->has('name'))
                                <span class="error">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                           <textarea type="text" class="form-control input-square"  name="description" required placeholder="Category description">{{old('description')}}</textarea>
                           @if ($errors->has('description'))
                                <span class="error">
                                    {{ $errors->first('description') }}
                                </span>
                            @endif
                       </div>

                       <div class="text-center">
                            <img src="" id="drawimage" class="img-responsive" width="300px" style="max-height: 350px;">
                       </div>
                        
                       <div class="form-group">
                            <button type="button" onclick="triggerFile()" id="button-image" class="btn btn-round btn-default">Add Category Image</button>
                       </div>
                       <input type="file" style="visibility: hidden" id="image" name="image">

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

        function deleteCategory(id){
            var complete = confirm('Are you sure you want to delete this category?');
            console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/category/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', 'Category Deleted');
                    location.reload();
                })
                .catch(err => {
                   
                });
        }
</script>
@endsection