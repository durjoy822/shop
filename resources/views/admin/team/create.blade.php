@extends('admin.layout.master')
@section('title')
team create
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Team Create</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Team</a></li>
      <li class="breadcrumb-item active" aria-current="page">team create</li>
    </ol>
</div>
<div class="row " >
    <div class="col-lg-8 offset-lg-2">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Team create </h6>
        </div>
        <div class="card-body">
        <form action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" class="form-control" value="{{old('name')}}"  name="name" id="name"
                placeholder="Enter your name">
                <div class="text-danger">@error('name') {{$message}} @enderror</div>
            </div>
            <div class="form-group">
            <label for="name"> Position</label>
            <input type="text" class="form-control" value="{{old('position')}}"  name="position" id="name"
                placeholder="Enter your position name">
                <div class="text-danger">@error('position') {{$message}} @enderror</div>
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
                {{-- <hr> --}}
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Social Media info</h6>
                    </div>
                    <div class="form-group">
                        <label for="name"> Facebook</label>
                        <input type="text" class="form-control" value="{{old('facebook')}}"  name="facebook" id="name"
                            placeholder="Enter your facebook link">
                            <div class="text-danger">@error('facebook') {{$message}} @enderror</div>
                        </div>
                    <div class="form-group">
                        <label for="name"> Whats app</label>
                        <input type="text" class="form-control" value="{{old('whats_app')}}"  name="whats_app" id="name"
                            placeholder="Enter your whats_app link">
                            <div class="text-danger">@error('whats_app') {{$message}} @enderror</div>
                        </div>
                    <div class="form-group">
                        <label for="name"> Twitter</label>
                        <input type="text" class="form-control" value="{{old('twitter')}}"  name="twitter" id="name"
                            placeholder="Enter your facebook link">
                            <div class="text-danger">@error('twitter') {{$message}} @enderror</div>
                        </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        </div>
    </div>
    </div>
</div>
</div>
<script>
</script>
@endsection
