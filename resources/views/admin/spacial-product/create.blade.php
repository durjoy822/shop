@extends('admin.layout.master')
@section('title')
    spacial product create
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
            <h1 class="h3 mb-0 text-gray-800"> Spacial products Create</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="./">Spacial product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Spaical product create</li>
            </ol>
        </div>
        <div class="row ">
            <div class="col-lg-10 offset-lg-1">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Spacial products create </h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('spacial_products.store') }}" method="post">
                            @csrf

                            <div class="row">
                                <!--product section-->
                                <div class="col-lg-6">
                                    <!--Offer Name -->
                                    <div class="form-group">
                                        <label for="name">Offer name </label>
                                        <input type="text" class="form-control" value="{{ old('offer_name') }}"
                                            name="offer_name" id="offer_name" placeholder="Offer name ">
                                        <div class="text-danger">
                                            @error('offer_name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- category-->
                                    <div class="form-group">
                                        <label for=""> Select Product</label>
                                        <select class="js-example-basic-single" name="product_id">
                                            <option value="" selected>Select</option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }} &nbsp;| &nbsp; {{ $product->selling_price }} Tk</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger pt-1">@error('product_id') {{ $message }} @enderror </div>

                                    </div>
                                      <!--selling  price -->
                                      <div class="form-group">
                                        <label for="name">Selling price</label>
                                        <input type="number" class="form-control" value="{{ old('selling_price') }}"
                                            name="selling_price" id="selling_price" placeholder="Product selling price ">
                                        <div class="text-danger">
                                            @error('selling_price')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--Sarting time-->
                                    <div class="form-group">
                                        <label for="starting_time">Offer starting time</label>
                                        <input type="datetime-local" class="form-control" value="{{ old('starting_time') }}"
                                            name="starting_time" id="starting_time">
                                        <div class="text-danger">
                                            @error('starting_time')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!--Ending time-->
                                    <div class="form-group">
                                        <label for="ending_time">Offer ending time</label>
                                        <input type="datetime-local" class="form-control" value="{{ old('ending_time') }}"
                                            name="ending_time" id="ending_time">
                                        <div class="text-danger">
                                            @error('ending_time')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <!--status-->
                                    <label for="file_input">Status</label>
                                    <div class="form-check">
                                        <input class="form-check-input" value="published" type="radio" name="status"
                                            checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Published
                                        </label>
                                        &nbsp; &nbsp; &nbsp; &nbsp;
                                        <input class="form-check-input" value="unpublished" type="radio" name="status">
                                        <label class="form-check-label"  for="flexRadioDefault2">
                                            Unpublished
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

@endsection
