@extends('admin.layout.master')
@section('title')
user profile
@endsection
@section('content')

<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User profile</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a >Profile</a></li>
      <li class="breadcrumb-item active" aria-current="page">User profile</li>
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
    <div class="row " >
        <div class="col-lg-10 offset-lg-1">
        <!-- Form Basic -->
        <div class="container">
            <div class="main-body">
                  <div class="row gutters-sm">
                    <!--profile logo info-->
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            @if ($info->image)
                            <img src="{{asset($info->image)}}"  id="image-previewer"  alt="Admin" class="rounded-circle" width="150">
                            @else
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png"  id="image-previewer"  alt="Admin" class="rounded-circle" width="150">
                            @endif

                            <div class="mt-3">
                                <!--guard name & auth name-->
                            @if ($info->name)
                            <h4>{{$info->name}}</h4>
                            @else
                            <h4>{{Auth::guard('user')->user()->name}}</h4>
                            @endif
                              <p class="text-secondary mb-1">Super Admin</p>
                              <!--come form settings table-->
                              <p class="text-muted font-size-sm">{{$setting->name}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--input field info-->
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                            <form action="{{route('user.info.update',['id'=>$info->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Profile Image</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input class="form-control " name="image" type="file" id="file-input">
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="name" value="{{$info->name}}" class="form-control">
                                <div class="text-danger">@error('name'){{$message}}@enderror</div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="email" value="{{$info->email}}" class="form-control">
                                <div class="text-danger">@error('email'){{$message}}@enderror</div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="number"  name="phone" value="{{$info->phone}}" class="form-control">
                                <div class="text-danger">@error('phone'){{$message}}@enderror</div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="address" name="address" value="{{$info->address}}" class="form-control">
                                <div class="text-danger">@error('address'){{$message}}@enderror</div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Role</h6>
                            </div>
                            <div class="col-sm-9 text-white">
                               <button class="btn btn primary bg-info text-white">Super  Admin</button>
                               <button class="btn btn primary bg-info text-white">Admin</button>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-12">
                              <button type="submit"  class="form-control btn btn-outline-primary" >Update</button>
                            </div>
                          </div>
                        </form>
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
