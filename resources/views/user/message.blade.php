@extends('layouts.user.master')

@section('landing')

    <div class="page-header" style="background: url(/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Messages</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home /</a>
                            </li>
                            <li class="current">Messages</li>
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
                    <h2 class="dashbord-title">Message</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div id="root">
                    <user-message inline-template>
                        <div class="row">
                            <div class="col-md-4">
                                
                                <div class="card" v-for="message in contacts" @click="emitValue(message.id, message.user.firstname, message.user.lastname)"  style="padding: 12px 10px 10px;">
                                    <div style="display: inline-block">
                                        <img class="img-circle" :src="message.user.profile.avatar == null ? '/img/avatar/avatar.png' : message.user.profile.avatar" width="40px" alt="">
                                        <div class="card-body" style="color: grey; padding: 0.25rem; display: inline-block">
                                            &nbsp; &nbsp; @{{message.user.firstname}} @{{message.user.lastname}} <span class="pull-right" style="margin-left: 15px;"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                

                            </div>

                            <div class="col-md-8" style="background-color: white; padding: 10px; ">
                            
                            
                            <div>
                            <div class="card" v-if="messages.length > 0" style="padding: 12px 10px 10px;" >
                                <div style="display: inline-block" v-show="clicked">
                                    <img class="" src="{{auth()->user()->profile->avatar == null ? '/img/avatar/avatar.png' : auth()->user()->profile->avatar}}" width="40px" alt="">
                                        <div class="card-body" style="color: grey; padding: 0.25rem; display: inline-block">
                                            &nbsp; &nbsp; @{{chatter_name}} <span class="pull-right"></span>
                                        </div>
                                </div>
                            </div>
                            <div v-if="messages.length > 0" id="message-scroll" style="height: 400px; padding-left: 10px; padding-right: 10px; margin-bottom: 20px; overflow-y: auto; overflow-x: hidden">
                                <div class="row" style="padding-left: 10px; padding-right: 10px; margin: 0" v-for="message in messages" :class="{proper:proper(message.sender_id)}">
                                    <div class="card" style="padding: 3px 6px 3px; display: inline-block; padding-bottom: 0px;">

                                        <div class="card-body text-left" style="color: grey; padding: 0em; display: inline-block; min-width: 100px; max-width: 300px; line-height: 20px;">
                                                @{{message.message}}
                                                <div class="text-right" style="font-size: 10px; line-height: 10px; padding-top: 7px;">@{{formatTime(message.created_at)}}</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br>
                                    <div v-if="messages.length > 0" class="row" style="margin-left: 10px; margin-top: 15px; margin: 10px; position: absolute; bottom: 0; left: 0; right: 0;">
                                        
                                        <input type="text" v-model="message" @keypress="chat" class="form-control" required placeholder="Enter your message">
                                        
                                    </div>
                                </div>
                            </user-message>
                            </div>


                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

