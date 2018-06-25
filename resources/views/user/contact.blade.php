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
                                    <form method="post" action="" @submit.prevent="updateProfile">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Country <span class="error">*</span></label>
                                            <select class="form-control input-md" v-model="country_id" type="text">
                                                <option v-for="country in countries" :value="country.id">@{{country.name}}</option>
                                            </select>
                                            <span class="error" v-if="errors.hasOwnProperty('country')">@{{errors['country'][0]}}</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="control-label">State <span class="error">*</span></label>
                                            <select class="form-control input-md" :disabled="state_off" v-model="state_id" type="text">
                                                <option v-for="state in states"  :value="state.id">@{{state.name}}</option>
                                            </select>
                                            <span class="error" v-if="errors.hasOwnProperty('country')">@{{errors['country'][0]}}</span>
                                        </div>

                                        
                                        <input type="hidden" name="_token" :value="csrf">
                                        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="control-label">Lga <span class="error">*</span></label>
                                        <select class="form-control input-md" :disabled="lga_off" v-model="lga_id" type="text">
                                            <option v-for="lga in lgas" :value="lga.id">@{{lga.name}}</option>
                                        </select>
                                        <span class="error" v-if="errors.hasOwnProperty('country')">@{{errors['country'][0]}}</span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="control-label">Website <span class="error">*</span></label>
                                        <input class="form-control input-md" v-model="website" type="text">
                                    </div>
                                </div>
                                <div class="text-right col-md-12">
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


