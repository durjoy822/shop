@extends('admin.layout.master')
@section('title')
products create
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Products Create</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Products</a></li>
      <li class="breadcrumb-item active" aria-current="page">products create</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Products create </h6>
            </div>
            <div class="card-body">
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" value="{{old('name')}}"  name="name" id="name"
                    placeholder="Enter product name">
                    <div class="text-danger">@error('name') {{$message}} @enderror</div>
                </div>
                <!--Category-->
                <div class="form-group">
                    <label for="select2SinglePlaceholder">Select Category</label>
                    <select class="select2-multiple form-control js-example-responsive" name="category_id" style="width: 100%"  name="category_id" id="select2SinglePlaceholder">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            <!--Sub category-->
                <div class="form-group">
                    <label for="select2SinglePlaceholder">Select Sub category</label>
                    <select class="select2-multiple2 form-control js-example-responsive" name="sub_category_id" style="width: 100%"  name="category_id" id="select2SinglePlaceholder">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            <!--Brand-->
                <div class="form-group">
                    <label for="select2SinglePlaceholder">Select Brand</label>
                    <select class="select2-multiple form-control js-example-responsive" name="brand_id" style="width: 100%"  name="category_id" id="select2SinglePlaceholder">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            <!--Unit-->
                <div class="form-group">
                    <label for="select2SinglePlaceholder">Select Unit</label>
                    <select class="select2-multiple form-control js-example-responsive" name="unit_id" style="width: 100%"  name="category_id" id="select2SinglePlaceholder">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!--code-->
                <div class="form-group">
                    <label for="name">Product code</label>
                    <input type="text" class="form-control" value="{{old('code')}}"  name="name" id="name"
                        placeholder="Enter product code">
                        <div class="text-danger">@error('code') {{$message}} @enderror</div>
                    </div>
                <!--regular price-->
                <div class="form-group">
                    <label for="name">Regular price</label>
                    <input type="number" class="form-control" value="{{old('regular_price')}}"  name="regular_price" id="name"
                        placeholder="Regular price">
                        <div class="text-danger">@error('regular_price') {{$message}} @enderror</div>
                    </div>
                <!--Selling price-->
                <div class="form-group">
                    <label for="name">Selling price</label>
                    <input type="number" class="form-control" value="{{old('selling_price')}}"  name="selling_price" id="name"
                        placeholder="Selling price">
                        <div class="text-danger">@error('selling_price') {{$message}} @enderror</div>
                    </div>
                <!--Discount-->
                <div class="form-group">
                    <label for="name">Discount</label>
                    <input type="number" class="form-control" value="{{old('discount')}}"  name="discount" id="name"
                        placeholder="discount">
                        <div class="text-danger">@error('discount') {{$message}} @enderror</div>
                    </div>
                <!--Discount-->
                <div class="form-group">
                    <label for="name">Stock Amount</label>
                    <input type="number" class="form-control" value="{{old('stock_amount')}}"  name="stock_amount" id="name"
                        placeholder="Stock amount">
                        <div class="text-danger">@error('stock_amount') {{$message}} @enderror</div>
                    </div>
                    <!--single image-->
                    <div class="row">
                        <div class="col-lg-8 pb-2">
                            <label for="file_input">Image</label>
                            <input class="form-control " name="image" type="file" id="file-input">
                        </div>
                        <div class="col-lg-4 ">
                            <img src=""  alt="" class="col-8"  id="image-previewer"  >
                        </div>
                    </div>
                    <!--multiple image-->
                    <div class="row">
                        <div class="col-lg-8 pb-2">
                            <label for="file_input">Multiple Image</label>
                            <input class="form-control " multiple name="image" type="file" id="file-input">
                        </div>
                        <div class="col-lg-4 ">
                            <img src=""  alt="" class="col-8"  id="image-previewer"  >
                        </div>
                    </div>
                    <!--status-->
                    <div class="mb-2">
                        <label for="">Status</label><br>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary ">
                              <input type="radio" value="Public" name="options" id="option1" autocomplete="off" > Public
                            </label>
                            <label class="btn btn-secondary  ">
                              <input type="radio" value="Privet" name="options" id="option2" autocomplete="off"> Privet
                            </label>
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
