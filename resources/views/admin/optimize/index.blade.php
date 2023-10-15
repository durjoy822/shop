@extends('admin.layout.master')
@section('title')
optimize
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Optimize</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Optimize settings</li>
    </ol>
</div>
<!--session message-->
@if(Session::has('message'))
<div class="alert alert-block alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <i class=" fa fa-check cool-green "></i>
    {{ nl2br(Session::get('message')) }}
  </div>
@endif
<!--table-->
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0 h6 font-weight-bold text-primary">
               Optimize site
            </div>
        </div>
      <div class="table-responsive p-3">
       <div class="row mb-3 offset-lg-1">
        <!--Cache clear -->
        <div class="col-lg-5 pt-2">
           <div class="card">
            <div class="card-body">
                <div class="m-0">
                    You can clear all site cache from here
                        <a href="{{route('optimize.clear')}}" class="float-right" ><button class="btn btn-outline-warning rounded-pill" type="submit">Clear Cache</button></a>
                </div>
            </div>
           </div>
        </div>

        <!-- artisan migrate-->
        <div class="col-lg-5 pt-2">
           <div class="card">
            <div class="card-body">
                <div class="m-0">
                    Upgrade your site from here
                        <a href="{{route('artisan.migrate')}}" class="float-right" >
                            <button class="btn btn-outline-info rounded-pill" type="submit">Upgrade</button>
                        </a>
                </div>
            </div>
           </div>
        </div>

        <!--migration fresh  --seed-->
        <div class="col-lg-5 pt-2 ">
           <div class="card">
            <div class="card-body">
                <div class="m-0">
                    You can run artisan migrate fresh --seed
                        <a href="{{route('artisan.migrate.fresh.seed')}}" class="float-right" >
                            <button class="btn btn-outline-primary rounded-pill" type="submit">Run Seed</button>
                        </a>
                </div>
            </div>
           </div>
        </div>
       </div>
      </div>
    </div>
  </div>
</div>
@endsection
