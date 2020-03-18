@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Profile</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Profile</li>
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
                    <h2 class="dashbord-title">Profile</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div id="root">
                        <div class="row">
                            
                                <div class="col-md-6">
                                    <form method="post" action="" @submit.prevent="updateProfile">
                                        <div class="form-group mb-3">
                                            <label class="control-label">First name <span class="error">*</span></label>
                                            <input class="form-control input-md" @focus="errors = {}" v-model="firstname" type="text">
                                            <span class="error" v-if="errors.hasOwnProperty('firstname')">@{{errors['firstname'][0]}}</span>
                                        </div>
                                        <input type="hidden" name="_token" :value="csrf">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Last name <span class="error">*</span></label>
                                            <input class="form-control input-md" @focus="errors = {}"  v-model="lastname" type="text">
                                                <span class="error" v-if="errors.hasOwnProperty('lastname')">@{{errors['lastname'][0]}}</span>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="control-label">Email <span class="error">*</span></label>
                                        <input class="form-control input-md" disabled value="{{$user->email}}" name="email" type="text">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="control-label">Username <span class="error">*</span></label>
                                        <input class="form-control input-md" disabled value="{{$user->username}}" name="username" type="text">
                                    </div>
                                </div>
                                <div class="text-right col-md-12">
                                    <div class="form-group mb-3">
                                        <button type="submit" @click="updateProfile" class="btn btn-common log-btn">Update</button>
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


