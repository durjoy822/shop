@extends('admin.layout.master')
@section('title')
units
@endsection
@section('content')
<style>
     span.select2.select2-container.select2-container--classic {
            width: 100% !important;
        }
        .setting .card:hover{
            background: rgb(161, 235, 132);
            transition: 2s;
        }

</style>
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Settings</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Settings</li>
    </ol>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!--User Settings-->
                    <div class="col-md-4 p-2 setting">
                        <div class="card">
                            <div class="card-body">
                                <div >
                                    <i class="fas fa-users-cog"></i>
                                    User Settings
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Roles Settings-->
                    <div class="col-md-4 p-2 setting">
                        <div class="card">
                            <div class="card-body">
                                <div >
                                     <i class="fas fa-user-shield  "></i>
                                     Roles Settins
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Optimize Settings-->
                    <div class="col-md-4 p-2 setting">
                        <div class="card">
                            <div class="card-body">
                                <div >
                                    <i class="fas fa-rocket"></i>
                                    Optimize
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
<div class="col-lg-12 px-0 mt-3">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0 h6 font-weight-bold text-primary">
                Settings
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-5">
                        <!--name-->
                        <div class="form-group mb-1">
                            <label for="name">App name (site name)</label>
                            <input type="text" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                                placeholder="Name">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>
                        </div>
                         <!--Email-->
                        <div class="form-group mb-1">
                            <label for="name">Email</label>
                            <input type="text" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                                placeholder="Name">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>
                        </div>
                         <!--Phone-->
                        <div class="form-group mb-1">
                            <label for="name">Phone</label>
                            <input type="text" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                                placeholder="Name">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>
                        </div>
                         <!--Address-->
                        <div class="form-group mb-1">
                            <label for="name">Addres</label>
                            <input type="text" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                                placeholder="Name">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>
                        </div>
                         <!--Design and developed-->
                        <div class="form-group">
                            <label for="name">Design & Developed by:</label>
                            <input type="text" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                                placeholder="Name">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>
                        </div>


                    </div>
                    <div class="col-lg-7">
                        <!--Dark logo-->
                        <div class="row">
                            <div class="col-lg-8 pb-2">
                                <label for="name">Dark logo</label>
                                <input class="form-control " name="image" type="file" >
                            </div>
                            <div class="col-lg-4 ">
                                <img src=""  alt="" class="col-8"  id="image-previewer"  >
                            </div>
                        </div>
                         <!--Light logo-->
                        <div class="row">
                            <div class="col-lg-8 pb-2">
                                <label for="name">Light logo</label>
                                <input class="form-control " name="image" type="file" >
                            </div>
                            <div class="col-lg-4 ">
                                <img src=""  alt="" class="col-8"  id="image-previewer"  >
                            </div>
                        </div>
                         <!--Favicon-->
                        <div class="row">
                            <div class="col-lg-8 pb-2">
                                <label for="name">Favicon</label>
                                <input class="form-control " name="image" type="file" >
                            </div>
                            <div class="col-lg-4 ">
                                <img src=""  alt="" class="col-8"  id="image-previewer"  >
                            </div>
                        </div>
                        <!--row-->
                        <div class="row">
                             <!--Opening day-->
                            <div class="col-lg-6">
                                <div class="form-group mb-1">
                                    <label for="">Opening Day </label>
                                    <select class="js-example-basic-single" name="category_id" onchange="getSubCategory(this.value)">
                                        <option value="" selected>Select</option>
                                            <option value="">saturday</option>
                                    </select>
                                    <div class="text-danger pt-1">@error('category_id') {{ $message }} @enderror </div>

                                </div>
                            </div>
                             <!--Closing day-->
                            <div class="col-lg-6">
                                <div class="form-group mb-1">
                                    <label for="">Closeing Day </label>
                                    <select class="js-example-basic-single" name="category_id" onchange="getSubCategory(this.value)">
                                        <option value="" selected>Select</option>
                                            <option value="">saturday</option>
                                            <option value="">Sunday</option>
                                            <option value="">Monday</option>
                                            <option value="">Twisday</option>
                                            <option value="">Thrusday</option>
                                            <option value="">Friday</option>
                                    </select>
                                    <div class="text-danger pt-1">@error('category_id') {{ $message }} @enderror </div>

                                </div>
                            </div>

                        </div>
                         <!--Row-->
                        <div class="row">
                             <!--Opening time-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Opening Time</label>
                                    <input type="time" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                                        placeholder="Name">
                                        <div class="text-danger">@error('name') {{$message}} @enderror</div>
                                </div>
                            </div>
                             <!--Closing time-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Closing Time</label>
                                    <input type="time" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                                        placeholder="Name">
                                        <div class="text-danger">@error('name') {{$message}} @enderror</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- <div class="form-group mb-1 d-none d-xs-block ">
                        <label for="name">App name (site name)</label>
                        <input type="text" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                            placeholder="Name">
                            <div class="text-danger">@error('name') {{$message}} @enderror</div>
                    </div> --}}
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>

    </div>
  </div>
</div>
@endsection
