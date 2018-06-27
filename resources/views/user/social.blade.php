@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Social</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Social</li>
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
                    <h2 class="dashbord-title">Social</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div id="root">
                        <div class="row">
                            
                                <div class="col-md-6">
                                    <form method="post" action="" @submit.prevent="updateSocial">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Facebook</label>
                                            <input class="form-control input-md" @focus="errors = {}" v-model="facebook" type="text">
                                            <span class="error" v-if="errors.hasOwnProperty('facebook')">@{{errors['facebook'][0]}}</span>
                                        </div>
                                        <input type="hidden" name="_token" :value="csrf">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Twitter</label>
                                            <input class="form-control input-md" @focus="errors = {}"  v-model="twitter" type="text">
                                            <span class="error" v-if="errors.hasOwnProperty('twitter')">@{{errors['twitter'][0]}}</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="control-label">Google plus</label>
                                            <input class="form-control input-md" @focus="errors = {}"  v-model="google" type="text">
                                            <span class="error" v-if="errors.hasOwnProperty('google')">@{{errors['google'][0]}}</span>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="control-label">Instagram</label>
                                        <input class="form-control input-md" @focus="errors = {}"  v-model="instagram" type="text">
                                        <span class="error" v-if="errors.hasOwnProperty('instagram')">@{{errors['instagram'][0]}}</span>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">Linkedin</label>
                                        <input class="form-control input-md" @focus="errors = {}"  v-model="linkedin" type="text">
                                        <span class="error" v-if="errors.hasOwnProperty('linkedin')">@{{errors['linkedin'][0]}}</span>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="control-label">SnapChat</label>
                                        <input class="form-control input-md" @focus="errors = {}"  v-model="snapchat" type="text">
                                        <span class="error" v-if="errors.hasOwnProperty('snapchat')">@{{errors['snapchat'][0]}}</span>
                                    </div>

                                </div>
                                <div class="text-right col-md-12">
                                    <div class="form-group mb-3">
                                        <button type="submit" @click="updateSocial" class="btn btn-common log-btn">Update</button>
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


