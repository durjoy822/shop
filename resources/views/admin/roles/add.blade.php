@extends('admin.layout.master')
@section('title')
roles create
@endsection
<style>
    .card-hover {
        height: 170px;
    }
</style>
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Roles Create</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="./">Roles</a></li>
      <li class="breadcrumb-item active" aria-current="page">roles create</li>
    </ol>
</div>
    <div class="row " >
        <div class="col-lg-12">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Roles create </h6>
            </div>
            <div class="card-body ">
                <div class="col-lg-6 offset-lg-3 ">
            <form action="{{route('roles.store')}}" method="post">
                @csrf

                <div class="form-group">
                <label for="name">Role Name</label>
                <input type="text" class="form-control" value="{{old('name')}}"  name="name" id="name"
                    placeholder="Enter role name">
                    <div class="text-danger">@error('name') {{$message}} @enderror</div>
                </div>
                <div class="form-group">
                <label for="name">Roles Description</label>
                <textarea class="form-control" name="description" placeholder="Roles description"></textarea>
                    <div class="text-danger">@error('description') {{$message}} @enderror</div>
                </div>
                </div>
                <div class="px-5 h6 m-0">
                    <input type="checkbox"> Select All
                </div>
                <div class="row px-3 py-3 ">
                    @php $i = 1; @endphp
                    @foreach($permission_groups as $group)
                    <div class="col-md-4 py-2">
                        <div class="card p-2">
                            <div class="card-hover">
                                <div class="card-heading  pt-3 px-4">
                                    <h5>
                                        <input class="form-check-input" name="permissions[]" type="checkbox" id="checkPermission" >
                                        <label class="form-check-label" for="checkPermission">{{$group->group_name}}</label>
                                    </h5>
                                </div>
                                <div class="card-body p-0 pl-5 mt-2">
                                   <p class="m-0 pl-2">
                                    @php

                                // $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                                    $j = 1;
                                    @endphp
                                    @foreach($permissions as $permission)
                                    <input class="form-check-input pl-2" type="checkbox" value=""id="flexCheckChecked" >
                                     <label class="form-check-label" for="flexCheckChecked">{{$permission->name}}</label><br>
                                     @php $j ++ ;  @endphp
                                     @endforeach
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php $i ++ ;  @endphp
                    @endforeach
                </div>
                <div class="px-3">
                    <button type="submit" class="btn btn-primary mt-3">Create roles</button>
                </div>
            </form>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
