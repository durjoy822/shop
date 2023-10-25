@extends('admin.layout.master')
@section('title')
brand edit
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Brand Edit</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Brand</a></li>
      <li class="breadcrumb-item active" aria-current="page">Brand edit</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Brand edit </h6>
            </div>
            <div class="card-body">
            <form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                <label for="name">Brand Name</label>
                <input type="text" class="form-control" value="{{$brand->name}}" value="{{old('name')}}"  name="name" id="name"
                    placeholder="Enter brand name">
                    <div class="text-danger">@error('name') {{$message}} @enderror</div>
                </div>
                    <div class="row">
                        <div class="col-lg-8 pb-2">
                            <label for="name">Image</label>
                            <input class="form-control " name="image" type="file" id="file-input">
                        </div>
                        <div class="col-lg-4 ">
                            <img src="{{asset($brand->image)}}"  alt="" class="col-8"  id="image-previewer"  >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
