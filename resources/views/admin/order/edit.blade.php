@extends('admin.layout.master')
@section('title')
order edit
@endsection
@section('content')
<style>
    p{
        padding:0px 50px;
    }
</style>
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Order edit</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Order</a></li>
      <li class="breadcrumb-item active" aria-current="page"> order edit</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Order edit </h6>
            </div>
            <div class="card-body">
            <form action="{{route('blogscategories.store')}}" method="post" >
                @csrf

                <!-- Brand-->
                <div class="form-group ">
                    <label for="">Order status</label>
                    <select class="form-control" name="brand_id">
                        <option value="" selected>---Select---</option>
                        <option value="pending" class="p" >Pending</option>
                        <option value="processing" class="p" >Processing</option>
                        <option value="cancil" class="p" >Cancil</option>

                    </select>
                    <div class="text-danger pt-1">@error('brand_id') {{ $message }} @enderror </div>
                </div>

                <div class="form-group ">
                    <label for="">Payment status</label>
                    <select class="form-control" name="brand_id">
                        <option value="" selected>---Select---</option>
                        <option value="paid"  >Payed</option>
                        <option value="unpain"  >Unpaid</option>

                    </select>
                    <div class="text-danger pt-1">@error('brand_id') {{ $message }} @enderror </div>
                </div>
                <div class="form-group ">
                    <label for="">Delivery status</label>
                    <select class="form-control" name="brand_id">
                        <option value="" selected>---Select---</option>
                        <option value="pending" class="p" >Pending</option>
                        <option value="processing" class="p" >Processing</option>
                        <option value="delevered" class="p" >Delevered</option>

                    </select>
                    <div class="text-danger pt-1">@error('brand_id') {{ $message }} @enderror </div>
                </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

