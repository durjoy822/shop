@extends('admin.layout.master')
@section('title')
teams
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Teams</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Teams</li>
    </ol>
</div>
<!--session message-->
@if(Session::has('message'))
<div class="alert alert-block alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <i class=" fa fa-check cool-green "></i>
    {{ nl2br(Session::get('message')) }}
  </div>
@endif
<!--table-->
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0 h6 font-weight-bold text-primary">
                Teams Data
            </div>
            <div>
                <a href="{{route('teams.create')}}"><button class="btn btn-info">Create Team</button></a>
            </div>
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>Sno</th>
              <th>Image</th>
              <th>Name</th>
              <th>Possition</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Sno</th>
                <th>Image</th>
                <th>Name</th>
                <th>Possition</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @if ($teams->count())
            @foreach ($teams  as $index=>$team )
            <tr>
                <td>{{$index + 1}}</td>
                <td>
                    <img src="{{asset($team->image)}}" style="border-radius: 100%;width:100px">
                </td>
                <td>{{$team->name}}</td>
                <td>{{$team->position}}</td>
                <td>
                  <a href="{{route('teams.edit',$team->id)}}"><i class="far fa-edit"></i></a>&nbsp;
                  <form action="{{route('teams.destroy',$team->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="border: none; background-color: transparent;">
                        <i class="far fa-trash-alt text-danger"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4" class="text-primary "> Units not found!</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
