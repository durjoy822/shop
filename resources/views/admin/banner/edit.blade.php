@extends('admin.layout.master')
@section('title')
banners edit
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Banners edit</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Banner</a></li>
      <li class="breadcrumb-item active" aria-current="page">Banner edit</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">banners edit </h6>
            </div>
            <div class="card-body">
            <form action="{{route('banners.update',$banner->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="select2SinglePlaceholder">Select banners product  </label>
                    <select class="select2-multiple form-control js-example-responsive" style="width: 100%"  name="product_id" id="select2SinglePlaceholder">
                        <option value="">Select</option>
                        @foreach ($products as $product)
                        <option value="{{$product->id}}"{{$product->id==$banner->product_id?'selected':''}} >{{$product->name}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">@error('product_id'){{$message}} @enderror</div>
                </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
<script>
</script>
@endsection
