@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Become a Seller</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Become a Seller</li>
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
                    <h2 class="dashbord-title">Apply to Become a Seller</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div id="root">
                        <div class="row">
                            
                                <div class="col-md-6">
                                    <form method="post" action="" @submit.prevent="apply">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Store Name <span class="error">*</span></label>
                                            <input class="form-control input-md" @focus="errors = {}" placeholder="E.g Golden Toasties" v-model="store_name" type="text">
                                            <span class="error" v-if="errors.hasOwnProperty('store_name')">@{{errors['store_name'][0]}}</span>
                                        </div>
                                        <input type="hidden" name="_token" :value="csrf">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Store Url <span class="error">*</span></label>
                                            <input class="form-control input-md" @focus="errors = {}" placeholder="E.g Golden Toasties"  v-model="store_url" type="text">
                                            <span class="error" v-if="errors.hasOwnProperty('store_url')">@{{errors['store_url'][0]}}</span>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="control-label">Store Description <span class="error">*</span></label>
                                            <textarea class="form-control" @focus="errors = {}" placeholder="E.g Describe your store"  v-model="store_description"></textarea>
                                            <span class="error" v-if="errors.hasOwnProperty('store_description')">@{{errors['store_description'][0]}}</span>
                                        </div>

                                        <div class="form-group mb-3">
                                           <label class="control-label">Upload Business Docs</label>
                                            <label class="tg-fileuploadlabel" style="position: relative;" @click="triggerFile('image1')" for="tg-photogallery">
                                            <div class="overlay-image text-center">
                                                <img src="" width="200px" style="margin-top: 12px;" id="image-show1"> 
                                            </div>    
                                            <span></span>
                                                <span>Upload Supporting Documents (Optional)</span>
                                                <span><i class="lni-plus" style="font-size: 45px; color: grey"></i></span>
                                                <span>Maximum upload file size: 500 KB</span>
                                                <input style="visibility: hidden" @change="readDoc('image1', 'image-show1')" class="tg-fileinput" id="image1" type="file" name="file">
                                            </label>
                                           
                                        </div>

                                      
                                </div>
                                <div class="col-md-6">
                                    

                                </div>
                                <div class="text-left col-md-12">
                                    <div class="form-group mb-3">
                                        <button type="submit" @click="apply" class="btn btn-common log-btn">Apply</button>
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


