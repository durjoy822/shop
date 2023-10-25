@extends('admin.layout.master')
@section('title')
products details
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product details </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a  href="./">Products</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Product details </li>
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
                Product Details
            </div>
            <div>
                <a href="./">
                    <button class="btn btn-info">
                        <i class="fas fa-angle-double-left"></i>  Previeous
                    </button>
                </a>
                <a href="{{route('products.create')}}">
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
                <td>{{$product->id}}</td>
            </tr>
            <tr>
                <th>Product Name</th>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{$product->category->name}}</td>
            </tr>
            <tr>
                <th>Sub category</th>
                <td>{{$product->subCategory->name}}</td>
            </tr>
            <tr>
                <th>Brand</th>
                <td>{{$product->brand->name}}</td>
            </tr>
            <tr>
                <th>Unit</th>
                <td>{{$product->unit->name}}</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>{{$product->code}}</td>
            </tr>
            <tr>
                <th>Regular Price</th>
                <td>{{$product->regular_price}}</td>
            </tr>
            <tr>
                <th>Selling price</th>
                <td>{{$product->selling_price}}</td>
            </tr>
            <tr>
                <th>Discount</th>
                <td>{{$product->discount}}%</td>
            </tr>
            <tr>
                <th>Strock Amount</th>
                <td>{{$product->stock_amount}}</td>
            </tr>
            <tr>
                <th>Hit count</th>
                <td>{{$product->hit_count}}</td>
            </tr>
            <tr>
                <th>Sales count</th>
                <td>{{$product->sales_count}}</td>
            </tr>
            <tr>
                <th>Short Description</th>
                <td>{{$product->short_description}}</td>
            </tr>
            <tr>
                <th>Long Description</th>
                <td>{{$product->long_description}}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                     <img src="{{asset($product->image)}}" style="border-radius: 100%;width:100px;height:70%">
                </td>
            </tr>
            <tr>
                <th>Image Gleary</th>
                <td>
                     <img src="" style="border-radius: 100%;width:100px;height:70%">
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    @if ($product->status=='Public')
                    <button class="btn btn-sm btn-info">Public</button>
                    @else
                    <button class="btn btn-sm btn-warning">Privet</button>
                   @endif
                </td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

