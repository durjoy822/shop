@extends('admin.layout.master')
@section('title')
    roles
@endsection
<style>
    .card-hover:hover {
        background: aliceblue;
    }
    .card-hover {
        height: 235px;
    }
</style>
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Roles</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Roles</li>
            </ol>
        </div>
        <!--table-->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="m-0 h6 font-weight-bold text-primary">
                        Roles Data
                    </div>
                    <div>
                        <a href="{{route('roles.create')}}"><button class="btn btn-info">Create roles</button></a>
                    </div>
                </div>
                <div class="row px-3 py-3 ">
                @foreach($roles as $role)
                    <div class="col-md-4 py-2">
                        <div class="card ">
                            <div class="card-hover">
                                <div class="card-heading  pt-3 text-center">
                                    <h2>{{$role->name}}</h2>
                                </div>
                                <div class="card-body py-2 text-center ">
                                    <p class="m-0">{{$role->description}}</p>
                                </div>
                                <div class="py-2 px-2 text-center">
                                    <a href=""><i class="far fa-edit"></i></a>&nbsp;
                                    <form action="" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border: none; background-color: transparent;">
                                            <i class="far fa-trash-alt text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
