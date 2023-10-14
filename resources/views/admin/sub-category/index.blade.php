@extends('admin.layout.master')
@section('title')
sub categories
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sub categories</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Sub categories</li>
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
               Sub categories Data
            </div>
            <div>
                <a href="{{route('subcategories.create')}}"><button class="btn btn-info">Create sub-category</button></a>
            </div>
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>Sno</th>
              <th>Category Name</th>
              <th>Sub category Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Sno</th>
                <th>Category Name</th>
                <th>Sub category Name</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @if ($subcategories->count())
            @foreach ($subcategories  as $index=>$subcategory )
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$subcategory->category->name}}</td>
                <td>{{$subcategory->name}}</td>
                <td >
                  <a href="{{route('subcategories.edit',$subcategory->id)}}"><i class="far fa-edit"></i></a>&nbsp;
                  <form action="{{route('subcategories.destroy',$subcategory->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="border: none; background-color: transparent;">
                        <i class="far fa-trash-alt text-danger"></i>
                    </button>
                  </form>
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
