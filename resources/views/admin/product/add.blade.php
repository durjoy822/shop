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
        <div class="col-lg-10 offset-lg-1">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Products create </h6>
            </div>
            <div class="card-body">
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf

            <div class="row">
                <!--product section-->
                <div class="col-lg-6">
                <!--Category-->
                <div class="form-group ">
                    <label for="select2SinglePlaceholder">Select Category</label>
                    <select  class="form-control"  name="category_id" placeholder="Select Category" >
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
                    <select class="select2-single2 form-control js-example-responsive" name="brand_id" style="width: 100%"  name="category_id" id="select2SinglePlaceholder">
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
                <!--Stock Amount-->
                <div class="form-group">
                    <label for="name">Stock Amount</label>
                    <input type="number" class="form-control" value="{{old('stock_amount')}}"  name="stock_amount" id="name"
                        placeholder="Stock amount">
                        <div class="text-danger">@error('stock_amount') {{$message}} @enderror</div>
                    </div>
                     <!--Short description-->
                <div class="form-group">
                    <label for="name">Short Description</label>
                    <textarea  class="content form-control" value="{{old('short_description')}}"  name="short_description" id="name"
                        placeholder="short description"></textarea>
                        <div class="text-danger">@error('short_description') {{$message}} @enderror</div>
                    </div>

                <!--long description-->
                <div class="form-group">
                    <label for="name">long Description</label>
                    <textarea  class="  content form-control" value="{{old('long_description')}}"  name="long_description" id="name"
                        placeholder="short description"></textarea>
                        <div class="text-danger">@error('long_description') {{$message}} @enderror</div>
                    </div>
                </div>

            <!--    category image and description section-->
                <div class="col-lg-6">
                    <!--name-->
                <div class="form-group">
                    <label for="name">Product name</label>
                    <input type="text" class="form-control" value="{{old('name')}}"  name="name" id="name"
                        placeholder="Enter product code">
                        <div class="text-danger">@error('code') {{$message}} @enderror</div>
                    </div>
                    <!--code-->
                <div class="form-group">
                    <label for="name">Product code</label>
                    <input type="text" class="form-control" value="{{old('code')}}"  name="code" id="name"
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
                    <!-- single image -->
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="file_input">Fetuared Image</label>
                            <input class="form-control " name="image" type="file" id="file-input">
                            <img src=""  alt="" class="col-8"  id="image-previewer" style="padding-top:10px;" >
                        </div>
                        <!--multiple image-->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="file_input">Multiple Image</label>
                                <input type="file" class="form-control" name="demo-4" id="demo-4" multiple>
                              </div>
                        </div>
                    </div>
                    <!--status-->
                    <div class="mb-2 pt-1">
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
