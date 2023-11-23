@extends('admin.layout.master')
@section('title')
about us create
@endsection
@section('content')
<style>
    .ck{
        height: 170px;
    }
</style>
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">About_us Create</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Brand</a></li>
      <li class="breadcrumb-item active" aria-current="page">About_us create</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">About_us create </h6>
            </div>
            <div class="card-body">
            <form action="{{route('about_us.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" class="form-control" value="{{old('heading')}}"  name="heading" id="heading"
                    placeholder="Enter about_us heading">
                    <div class="text-danger">@error('heading') {{$message}} @enderror</div>
                </div>
                <div class="form-group">
                <label for="content">Content</label>
                <textarea class="tinymce form-control " id="editor" value="{{ old('content') }}" name="content"
                placeholder="Write about_us details"></textarea>
                    <div class="text-danger">@error('content') {{$message}} @enderror</div>
                </div>
                    <div class="row">
                        <div class="col-lg-8 pb-2">
                            <label for="name">Image</label>
                            <input class="form-control " name="image" type="file" id="file-input">
                        </div>
                        <div class="col-lg-4 ">
                            <img src=""  alt="" class="col-8"  id="image-previewer"  >
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
