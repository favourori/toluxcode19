@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Contact</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/">Home /</a>
                            </li>
                            <li class="current">Contact</li>
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
                    <h2 class="dashbord-title">Contact Address</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div id="root">
                        <div class="row">
                            
                                <div class="col-md-6">
                                    <form method="post" action="" @submit.prevent="updateContact">
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
                                            <label class="control-label">Address</label>
                                            <textarea class="form-control input-md" v-model="address"></textarea>
                                        </div>
                                        
                                        <input type="hidden" name="_token" :value="csrf">
                                        
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="form-group mb-3">
                                        <label class="control-label">Website</label>
                                        <input class="form-control input-md" @focus="errors = {}" v-model="website" type="text">
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

                                    <div class="form-group mb-3">
                                        <label class="control-label">Phone <span class="error">*</span></label>
                                        <input class="form-control input-md" @focus="errors = {}" v-model="phone" type="number">
                                        <span class="error" v-if="errors.hasOwnProperty('phone')">@{{errors['phone'][0]}}</span>
                                    
                                    </div>
                                    
                                    <input class="form-control input-md" v-model="latitude" type="hidden">

                                    <input class="form-control input-md" v-model="latitude" type="hidden">
                                </div>
                                <!-- <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="control-label">Address</label>
                                        <textarea class="form-control input-md" v-model="address"></textarea>
                                    </div>
                                </div> -->
                                <div class="col-md-12">
                                    <label class="control-label">Location</label>
                                    <input id="pac-input" class="form-control" style="width: 60%; margin-top: 10px; border: 1px solid rgb(66, 176, 219);" type="text"
                                    placeholder="Select the nearest landmark to your location">
                                    <div class="" style="height: 250px;" id="map"></div>
                                    
                                </div>
                                <div class="text-right col-md-12">
                                    <br>
                                    <div class="form-group mb-3">
                                        <button type="submit" @click="updateContact" class="btn btn-common log-btn">Update</button>
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


