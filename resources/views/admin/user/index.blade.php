@extends('admin.layout.master')
@section('title')
user
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">user</li>
    </ol>
</div>
<!--table-->
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0 h6 font-weight-bold text-primary">
                User Data
            </div>
            <div>
                <a href="{{route('user.add')}}"><button class="btn btn-info">Create user</button></a>
            </div>
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>Sno</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Sno</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @if ($users->count()>0)
            @foreach ($users as $index=>$user )
            <tr>
              <td>{{$index +1}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                <button href="#" class="btn btn-sm btn-outline-info">Super Admin</button>
            </td>
              <td >
                <a href=""><i class="fas fa-user-edit text-warning"></i></a>&nbsp;
                <a href=""><i class="far fa-eye text-info"></i></a>&nbsp;
                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            @endforeach
            @endif
            {{-- <tr>
              <td>2</td>
              <td> Nixon</td>
              <td>nixon@gmail.com</td>
              <td>
                <button href="#" class="btn btn-sm btn-outline-primary">Super Admin</button>
                <button href="#" class="btn btn-sm btn-outline-info">Admin</button>
                <button href="#" class="btn btn-sm btn-outline-warning">Author</button>
            </td>
              <td >
                <a href=""><i class="fas fa-user-edit text-warning"></i></a>&nbsp;
                <a href=""><i class="far fa-eye text-info"></i></a>&nbsp;
                <a href=""><i class="far fa-trash-alt text-danger"></i></a>
              </td>
            </tr> --}}

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
