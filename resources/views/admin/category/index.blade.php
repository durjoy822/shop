@extends('admin.layout.master')
@section('title')
categories
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categories</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Categories</li>
    </ol>
</div>
<!--table-->
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0 h6 font-weight-bold text-primary">
                Categories Data
            </div>
            <div>
                <a href="{{route('categories.create')}}"><button class="btn btn-info">Add category</button></a>
            </div>
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>Sno</th>
              <th>Image</th>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Sno</th>
                <th>Image</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @if ($categories->count())
            @foreach ($categories  as $index=>$category )
            <tr>
                <td>{{$index + 1}}</td>
                <td>
                  <img src="{{asset($category->image)}}" style="border-radius: 100%;width:100px">
                </td>
                <td>{{$category->name}}</td>
                <td >
                  <a href=""><i class="far fa-edit"></i></a>&nbsp;
                  <a href=""><i class="far fa-trash-alt text-danger"></i></a>
                </td>
              </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4" class="text-primary "> Categories not found!</td>
            </tr>
            @endif


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
