@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">My Adverts</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Advert</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('sidebar')
@include('layouts.user.sidebar')
@endsection

@section('dashboard-space')

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="page-content">
            <div class="inner-box">
                <div class="dashboard-box">
                    <h2 class="dashbord-title">Adverts</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div id="root">
                    <form method="post" enctype="multipart/form-data" @submit.prevent="createAdvert">
                        <div class="row">
                        
                                <div class="col-md-6">
                                    
                                        <div class="form-group mb-3">
                                            <label class="control-label">Category <span class="error">*</span></label>
                                            <select class="form-control input-md" @focus="errors = {}" v-model="category_id" type="text">
                                                <option value="0" selected>Select Category</option>
                                                <option v-for="category in categories" :value="category.id">@{{category.name}}</option>
                                            </select>
                                            <span class="error" v-if="errors.hasOwnProperty('category_id')">@{{errors['category_id'][0]}}</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="control-label">SubCategory <span class="error">*</span></label>
                                            <select class="form-control input-md" @focus="errors = {}" :disabled="subcategory_off" v-model="subcategory_id" type="text">
                                                <option value="0" selected>Select SubCategory</option>
                                                <option v-for="subcategory in subcategories" :value="subcategory.id">@{{subcategory.name}}</option>
                                            </select>
                                            <span class="error" v-if="errors.hasOwnProperty('subcategory_id')">@{{errors['subcategory_id'][0]}}</span>
                                        </div>

                                        <div class="form-group mb-3" v-for="type in types">
                                            <label class="control-label">@{{type.name}} <span class="error">*</span></label>
                                                <div v-if="type.form_type == 'select'">
                                                    <select class="form-control input-md" :id="replaceSpace(type.name)" required @focus="errors = {}" type="text">
                                                        <option value="0" selected>Select @{{type.name}}</option>
                                                        <option v-for="subtype, index in type.subtype"  :value="subtype.id">@{{subtype.name}}</option>
                                                    </select>
                                                </div>

                                                <div  v-if="type.form_type == 'checkbox'">
                                                    <span class="tg-checkbox" v-for="subtype in type.subtype">
                                                        <input type="checkbox" :id="replaceSpace(type.name)" :name="replaceSpace(type.name)+'[]'" :value="subtype.id">
                                                        <label>@{{subtype.name}}</label> &nbsp; &nbsp; &nbsp;
                                                    </span>
                                                </div>

                                                <div  v-if="type.form_type == 'radio'">
                                                    <span class="tg-radio" v-for="subtype in type.subtype">
                                                        <input type="radio"  :id="replaceSpace(type.name)" required :name="replaceSpace(type.name)" :value="subtype.id">
                                                        <label>@{{subtype.name}}</label> &nbsp; &nbsp; &nbsp;
                                                    </span>
                                                </div>
                                            
                                            <span class="error" v-if="errors.hasOwnProperty('type_id')">@{{errors['type_id'][0]}}</span>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Title<span class="error">*</span></label>
                                            <input class="form-control input-md" @focus="errors = {}" v-model="title" type="text">
                                            <span class="error" v-if="errors.hasOwnProperty('title')">@{{errors['title'][0]}}</span>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Price<span class="error">*</span></label>
                                            <input class="form-control input-md" @focus="errors = {}" v-model="price" type="number">
                                            <span class="error" v-if="errors.hasOwnProperty('price')">@{{errors['price'][0]}}</span>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Phone<span class="error">*</span></label>
                                            <input class="form-control input-md" @focus="errors = {}" v-model="phone1" type="text">
                                            <span class="error" v-if="errors.hasOwnProperty('phone1')">@{{errors['phone1'][0]}}</span>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control input-md" @focus="errors = {}" v-model="description"></textarea>
                                            <span class="error" v-if="errors.hasOwnProperty('description')">@{{errors['description'][0]}}</span>
                                        </div>
                                        
                                        <input type="hidden" name="_token" :value="csrf">
                                        
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="form-group mb-3">
                                            <label class="control-label">Country <span class="error">*</span></label>
                                            <select class="form-control input-md" @focus="errors = {}" v-model="country_id" type="text">
                                                <option value="0" selected>Select Country</option>
                                                <option v-for="country in countries" :value="country.id">@{{country.name}}</option>
                                            </select>
                                            <span class="error" v-if="errors.hasOwnProperty('country_id')">@{{errors['country_id'][0]}}</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="control-label">State <span class="error">*</span></label>
                                            <select class="form-control input-md" @focus="errors = {}" :disabled="state_off" v-model="state_id" type="text">
                                                <option value="0" selected>Select State</option>
                                                <option v-for="state in states"  :value="state.id">@{{state.name}}</option>
                                            </select>
                                            <span class="error" v-if="errors.hasOwnProperty('state_id')">@{{errors['state_id'][0]}}</span>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Lga <span class="error">*</span></label>
                                            <select class="form-control input-md" @focus="errors = {}" :disabled="lga_off" v-model="lga_id" type="text">
                                                <option value="0" selected>Select Lga</option>
                                                <option v-for="lga in lgas" :value="lga.id">@{{lga.name}}</option>
                                            </select>
                                            <span class="error" v-if="errors.hasOwnProperty('lga_id')">@{{errors['lga_id'][0]}}</span>
                                        </div>
          
                                    <div class="form-group mb-3">
                                        <label class="control-label">Longitude <span class="error">*</span></label>
                                        <input class="form-control input-md" disabled class="longitude" id="longitude" type="text">
                                        <span class="error" v-if="errors.hasOwnProperty('longitude')">@{{errors['longitude'][0]}}</span>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Latitude <span class="error">*</span></label>
                                        <input class="form-control input-md" disabled class="latitude" id="latitude" type="text">
                                        <span class="error" v-if="errors.hasOwnProperty('latitude')">@{{errors['latitude'][0]}}</span>
                                    </div>
                                    
                                    <input class="form-control input-md" v-model="latitude" type="hidden">

                                    <input class="form-control input-md" v-model="latitude" type="hidden">
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="control-label">Address</label>
                                        <textarea class="form-control input-md" @focus="errors = {}" v-model="address1"></textarea>
                                        <span class="error" v-if="errors.hasOwnProperty('address1')">@{{errors['address1'][0]}}</span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                    <div class="col-md-4">
                                            <label class="tg-fileuploadlabel" @click="triggerFile('image1')" for="tg-photogallery">
                                                <span></span>
                                                <span>Upload Image</span>
                                                <span><i class="lni-plus" style="font-size: 45px; color: grey"></i></span>
                                                <span>Maximum upload file size: 500 KB</span>
                                                <input style="visibility: hidden" class="tg-fileinput" id="image1" type="file" name="file">
                                            </label>
                                            <span class="error" v-if="errors.hasOwnProperty('image1')">@{{errors['image1'][0]}}</span>
                                    
                                        </div>

                                        <div class="col-md-4">
                                            <label class="tg-fileuploadlabel" @click="triggerFile('image2')" for="tg-photogallery">
                                                <span></span>
                                                <span>Upload Image</span>
                                                <span><i class="lni-plus" style="font-size: 45px; color: grey"></i></span>
                                                <span>Maximum upload file size: 500 KB</span>
                                                <input style="visibility: hidden" class="tg-fileinput" id="image2" type="file" name="file">
                                            </label>
                                            <span class="error" v-if="errors.hasOwnProperty('image2')">@{{errors['image2'][0]}}</span>
                                    
                                        </div>

                                        <div class="col-md-4">
                                            <label class="tg-fileuploadlabel" @click="triggerFile('image3')" for="tg-photogallery">
                                                <span></span>
                                                <span>Upload Image</span>
                                                <span><i class="lni-plus" style="font-size: 45px; color: grey"></i></span>
                                                <span>Maximum upload file size: 500 KB</span>
                                                <input style="visibility: hidden" class="tg-fileinput" id="image3" type="file" name="file">
                                            </label>
                                            <span class="error" v-if="errors.hasOwnProperty('image3')">@{{errors['image3'][0]}}</span>
                                    
                                        </div>

                                        <div class="col-md-4">
                                            <label class="tg-fileuploadlabel" @click="triggerFile('image4')" for="tg-photogallery">
                                                <span></span>
                                                <span>Upload Image</span>
                                                <span><i class="lni-plus" style="font-size: 45px; color: grey"></i></span>
                                                <span>Maximum upload file size: 500 KB</span>
                                                <input style="visibility: hidden" class="tg-fileinput" id="image4" type="file" name="file">
                                            </label>
                                            <span class="error" v-if="errors.hasOwnProperty('image4')">@{{errors['image4'][0]}}</span>
                                    
                                        </div>
                                    </div>
                                    
                                </div>
                        
                                <div class="col-md-12">
                                    <label class="control-label">Location</label>
                                    <input id="pac-input" class="form-control" style="width: 60%; margin-top: 10px; border: 1px solid rgb(66, 176, 219);" type="text"
                                    placeholder="Select the nearest landmark to your location">
                                    <div class="" style="height: 250px;" id="map"></div>
                                    
                                </div>
                                <div class="text-right col-md-12">
                                    <br>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-block btn-common log-btn">Create Advert</button>
                                    </div>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('custom-script')

<script>
   
         function readIMG(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#drawimage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // $("#image").change(function(){
        //     readIMG(this);
        // });

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



<!-- <div class="overlay" style="
    position:  absolute;
    background-color:  black;
    width: 100%;
    top: 0;
    bottom:  0;
    display:  block;
    opacity: 0.6;
    /* margin: 2px 15px 2px 15px; */
    /* padding: 10px; */
    z-index: 2000;
"></div> -->