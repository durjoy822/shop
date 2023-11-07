@extends('admin.layout.master')
@section('title')
blog create
@endsection
@section('content')
<style>
     .ck {
            height: 200px;
        }
</style>
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">blog Create</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Blog</a></li>
      <li class="breadcrumb-item active" aria-current="page">blog create</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Blog create </h6>
            </div>
            <div class="card-body">
            <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="select2SinglePlaceholder">Select Category</label>
                    <select class="select2-multiple form-control js-example-responsive" style="width: 100%"  name="blog_category_id" id="select2SinglePlaceholder">
                        <option value="">Select</option>
                        @foreach ($blogcats as $blogcat)
                        <option value="{{$blogcat->id}}">{{$blogcat->name}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">@error('blog_category_id') {{$message}} @enderror</div>
                </div>
                <div class="form-group">
                <label for="name">Heading</label>
                <input type="text" class="form-control" value="{{old('heading')}}"  name="heading" id="name"
                    placeholder="Enter blog heading">
                    <div class="text-danger">@error('heading') {{$message}} @enderror</div>
                </div>
                <div class="form-group mb-1">
                    <label for="name">Content</label>
                    <textarea class="tinymce form-control " id="editor" value="{{ old('content') }}" name="content"
                        placeholder="Blog content"></textarea>
                    </div>
                    <div class="text-danger">@error('content') {{ $message }} @enderror </div>
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
