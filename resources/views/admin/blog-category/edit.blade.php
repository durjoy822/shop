@extends('admin.layout.master')
@section('title')
blog categories edit
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blog categories Create</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Blog categories</a></li>
      <li class="breadcrumb-item active" aria-current="page"> blog categories edit</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Blog categories edit </h6>
            </div>
            <div class="card-body">
            <form action="{{route('blogscategories.update',$blogcats->id)}}" method="post" >
                @csrf
                @method('put')
                <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" value="{{$blogcats->name}}" value="{{old('name')}}"  name="name" id="name"
                    placeholder="Enter category name">
                    <div class="text-danger">@error('name') {{$message}} @enderror</div>
                </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

