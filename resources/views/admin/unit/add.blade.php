@extends('admin.layout.master')
@section('title')
units create
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Units Create</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Units</a></li>
      <li class="breadcrumb-item active" aria-current="page">units create</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Units create </h6>
            </div>
            <div class="card-body">
            <form action="{{route('units.store')}}" method="post">
                @csrf
                <div class="form-group">
                <label for="name">Units Name</label>
                <input type="text" class="form-control"  value="{{old('name')}}"  name="name" id="name"
                    placeholder="Enter unit name">
                    <div class="text-danger">@error('name') {{$message}} @enderror</div>
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
