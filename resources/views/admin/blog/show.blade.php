@extends('admin.layout.master')
@section('title')
blog details
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blog details </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a  href="./">Blog</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Blog details </li>
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
                Blog Details
            </div>
            <div>
                <a href="./">
                    <button class="btn btn-info">
                        <i class="fas fa-angle-double-left"></i>  Previeous
                    </button>
                </a>
                <a href="{{route('blogs.edit',$blog->id)}}">
                    <button class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                    </button>
                </a>
            </div>
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" >
          <thead class="thead-light">
            <tr>
                <th>Sno</th>
                <td>{{$blog->id}}</td>
            </tr>
            <tr>
                <th> Blog category</th>
                <td>{{$blog->BlogCategory->name}}</td>
            </tr>
            <tr>
                <th>Blog heading</th>
                <td>{{$blog->heading}}</td>
            </tr>
            <tr>
                <th>Blog content</th>
                <td>{!!$blog->content!!}</td>
            </tr>
            <tr>
                <th>Blog image</th>
                <td>
                    <img src="{{asset($blog->image)}}" style="border-radius: 100%;width:100px">
                </td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

