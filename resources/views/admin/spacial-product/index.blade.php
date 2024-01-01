@extends('admin.layout.master')
@section('title')
spacial-product
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Spacial product</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Spacial product</li>
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
                Spacial product Data
            </div>
            <div>
                <a href="{{route('spacial_products.create')}}"><button class="btn btn-info">Create spacial product</button></a>
            </div>
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
                <th>Sno</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Spacial offer name</th>
                <th>Selling Price</th>
                <th>Starting date/time</th>
                <th>Ending date/time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Sno</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Spacial offer name</th>
                <th>Selling Price</th>
                <th>Starting date/time</th>
                <th>Ending date/time</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
          </tfoot>
          <tbody>
            @if ($spacialProducts->count())
            @foreach ($spacialProducts  as $index=>$spacialProduct )
            <tr>
                <td>{{$index + 1}}</td>
                <td>
                    <a href=""><img src="{{asset($spacialProduct->product->image)}}" style="border-radius: 100%;width:100px"></a>
                </td>
                <td>{{$spacialProduct->product->name}}</td>
                <td>{{$spacialProduct->offer_name}}</td>
                <td>{{$spacialProduct->selling_price}} Tk</td>
                <td>{{$spacialProduct->starting_time}}</td>
                <td>{{$spacialProduct->ending_time}}</td>
                <td>
                    @if ($spacialProduct->status=='published')
                        <button class="btn btn-sm btn-info">Published</button>
                        @else
                        <button class=" btn btn-sm btn-danger">Unpublished</button>

                    @endif
            </td>
                <td>
                  <a href="{{route('spacial_products.edit',$spacialProduct->id)}}"><i class="far fa-edit"></i></a>&nbsp;
                  <form action="{{route('spacial_products.destroy',$spacialProduct->id)}}" method="post" class="d-inline">
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
                <td colspan="4" class="text-primary ">Spacial product not found!</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
