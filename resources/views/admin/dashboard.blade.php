@extends('layouts.admin.master')

@section('content')
<h4 class="page-title">Dashboard</h4>

<div class="row text-center">

        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h6>Total Users</h6>
                    <p>
                    <h5>{{$user_count}}</h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h6>Total Categories</h6>
                    <p>
                    <h5>{{$category_count}}</h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h6>Total Subcategories</h6>
                    <p>
                    <h5>{{$subcategory_count}}</h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h6>Total Types</h6>
                    <p>
                        <h5>{{$type_count}}</h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h6>Total Subtypes</h6>
                    <p>
                        <h5>{{$subtype_count}}</h5>
                    </p>
                </div>
            </div>
        </div>
</div>
            
@endsection