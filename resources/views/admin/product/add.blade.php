@extends('admin.layout.master')
@section('title')
    products create
@endsection
@section('content')
    <style>
        span.select2.select2-container.select2-container--classic {
            width: 100% !important;
        }


        html * {
            box-sizing: border-box;
        }

        p {
            margin: 0;
        }

        .upload {
            &__box {
                padding: 40px;
            }

            &__inputfile {
                width: .1px;
                height: .1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }

            &__btn {
                display: inline-block;
                font-weight: 600;
                color: #fff;
                text-align: center;
                min-width: 116px;
                padding: 5px;
                transition: all .3s ease;
                cursor: pointer;
                border: 2px solid;
                background-color: #4045ba;
                border-color: #4045ba;
                border-radius: 10px;
                line-height: 26px;
                font-size: 14px;

                &:hover {
                    background-color: unset;
                    color: #4045ba;
                    transition: all .3s ease;
                }

                &-box {
                    margin-bottom: 10px;
                }
            }

            &__img {
                &-wrap {
                    display: flex;
                    flex-wrap: wrap;
                    margin: 0 -10px;
                }

                &-box {
                    width: 200px;
                    padding: 0 10px;
                    margin-bottom: 12px;
                }

                &-close {
                    width: 24px;
                    height: 24px;
                    border-radius: 50%;
                    background-color: rgba(0, 0, 0, 0.5);
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    text-align: center;
                    line-height: 24px;
                    z-index: 1;
                    cursor: pointer;

                    &:after {
                        content: '\2716';
                        font-size: 14px;
                        color: white;
                    }
                }
            }
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }
        .ck {
            height: 120px;
        }

    </style>


    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Products Create</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="./">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">products create</li>
            </ol>
        </div>
        <div class="row ">
            <div class="col-lg-10 offset-lg-1">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Products create </h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <!--product section-->
                                <div class="col-lg-6">
                                    <!-- category-->
                                    <div class="form-group">
                                        <label for=""> Select category</label>
                                        <select class="js-example-basic-single" name="category_id" onchange="getSubCategory(this.value)">
                                            <option value="" selected>Select</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger pt-1">@error('category_id') {{ $message }} @enderror </div>

                                    </div>
                                    <!--sub category-->
                                    <div class="form-group">
                                        <label for=""> Select Sub-category</label>
                                        <select class="js-example-basic-single" name="sub_category_id" id="subCategoryID">
                                            <option value="" selected>Select</option>
                                            @foreach ($subCategories as $subCategory)
                                                <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger pt-1">@error('sub_category_id') {{ $message }} @enderror </div>
                                    </div>
                                    <!-- Brand-->
                                    <div class="form-group">
                                        <label for=""> Select Brand</label>
                                        <select class="js-example-basic-single" name="brand_id">
                                            <option value="" selected>Select</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger pt-1">@error('brand_id') {{ $message }} @enderror </div>
                                    </div>
                                    <!-- unit-->
                                    <div class="form-group">
                                        <label for=""> Select unit</label>
                                        <select class="js-example-basic-single" name="unit_id">
                                            <option value="" selected>Select</option>
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger pt-1">@error('unit_id') {{ $message }} @enderror </div>
                                    </div>
                                    <!--Short description-->
                                    <div class="form-group">
                                        <label for="name">Short Description</label>
                                        <textarea class="tinymce form-control" id="editor" value="{{ old('short_description') }}" name="short_description"
                                            placeholder="short description"></textarea>
                                        </div>
                                        <div class="text-danger">@error('short_description') {{ $message }} @enderror </div>

                                    <!--long description-->
                                    <div class="form-group">
                                        <label for="name">long Description</label>
                                        <textarea class="form-control" id="editor2" value="{{ old('long_description') }}" name="long_description"
                                            placeholder="long description"></textarea>
                                        <div class="text-danger">
                                            @error('long_description')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!--    category image and description section-->
                                <div class="col-lg-6">
                                    <!--name-->
                                    <div class="form-group">
                                        <label for="name">Product name</label>
                                        <input type="text" class="form-control" value="{{ old('name') }}"
                                            name="name" id="name" placeholder="Enter product code">
                                        <div class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!--code-->
                                    <div class="form-group">
                                        <label for="name">Product code</label>
                                        <input type="text" class="form-control" value="{{ old('code') }}"
                                            name="code" id="name" placeholder="Enter product code">
                                        <div class="text-danger">
                                            @error('code')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!--regular price-->
                                    <div class="form-group">
                                        <label for="name">Regular price</label>
                                        <input type="number" class="form-control" value="{{ old('regular_price') }}"
                                            name="regular_price" id="name" placeholder="Regular price">
                                        <div class="text-danger">
                                            @error('regular_price')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!--Selling price-->
                                    <div class="form-group">
                                        <label for="name">Selling price</label>
                                        <input type="number" class="form-control" value="{{ old('selling_price') }}"
                                            name="selling_price" id="name" placeholder="Selling price">
                                        <div class="text-danger">
                                            @error('selling_price')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!--Discount-->
                                    <div class="form-group">
                                        <label for="name">Discount</label>
                                        <input type="number" class="form-control" value="{{ old('discount') }}"
                                            name="discount" id="name" placeholder="discount">
                                        <div class="text-danger">
                                            @error('discount')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!--Stock Amount-->
                                    <div class="form-group">
                                        <label for="name">Stock Amount</label>
                                        <input type="number" class="form-control" value="{{ old('stock_amount') }}"
                                            name="stock_amount" id="name" placeholder="Stock amount">
                                        <div class="text-danger">
                                            @error('stock_amount')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- single image -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="file_input">Fetuared Image</label>
                                            <input class="form-control " name="image" type="file" id="file-input">
                                            <img src="" alt="" class="col-8" id="image-previewer"
                                            style="width: 200px;margin-top:5px; ">
                                        </div>
                                        <!--multiple image-->
                                        <div class="col-lg-6 mt-2">
                                            <div class="upload__box">
                                                <div class="upload__btn-box">
                                                    <label class="upload__btn mb-0">
                                                        <p>Multiple images</p>
                                                        <input type="file" multiple="" name="multiple_image[]"
                                                            data-max_length="20" class="form-control upload__inputfile">
                                                    </label>
                                                </div>

                                                <div class="upload__img-wrap   " style="width: 70px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--status-->
                                    <label for="file_input">Status</label>
                                    <div class="form-check">
                                        <input class="form-check-input" value="Public" type="radio" name="status"
                                            checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Public
                                        </label>
                                        &nbsp; &nbsp; &nbsp; &nbsp;
                                        <input class="form-check-input" value="Privet" type="radio" name="status">
                                        <label class="form-check-label"  for="flexRadioDefault2">
                                            Privet
                                        </label>
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


    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}

    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });
    </script>


    <script>
        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function() {
                $(this).on('change', function(e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var html =
                                        "<div class='upload__img-box '><div style='background-image: url(" +
                                        e.target.result + ")' data-number='" + $(
                                            ".upload__img-close").length + "' data-file='" + f
                                        .name +
                                        "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function(e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>

<!--dependent category select  code-->
    <script>
        function getSubCategory(categoryID){
            // alert(categoryID);
            $.ajax({
                type:"GET",
                url:"{{route('getCategory')}}",
                data:{id:categoryID},
                dataType:"JSON",
                success:function(response){
                    var option='';
                    option +='<option>Select</option>';
                    $.each(response,function(key,value)
                    {
                        option +='<option value="'+value.id+'"> '+value.name+' </option>';
                    });
                    var subCategoryID = $('#subCategoryID');
                    subCategoryID.empty();
                    subCategoryID.append(option);
                }
            });
        }
    </script>
@endsection
