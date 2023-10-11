@extends('admin.layout.master')
@section('title')
user
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User Create</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">user</a></li>
      <li class="breadcrumb-item active" aria-current="page">user create</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-8 offset-lg-2">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">User create </h6>
            </div>
            <div class="card-body">
            <form>
                <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control"  name="name" id="name"
                    placeholder="Enter full name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="Confirm password"  name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-2">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary ">
                          <input type="radio" value="active" name="options" id="option1" autocomplete="off" > Active
                        </label>
                        <label class="btn btn-secondary  ">
                          <input type="radio" value="inactive" name="options" id="option2" autocomplete="off"> Inactive
                        </label>
                      </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
