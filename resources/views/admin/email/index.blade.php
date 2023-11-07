@extends('admin.layout.master')
@section('title')
emails
@endsection
@section('content')
<style>
    .ck{
        height: 170px;
    }
</style>
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Emails</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">emails</li>
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
<div class="row">
<div class="col-md-6">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0 h6 font-weight-bold text-primary">
                User Data
            </div>
            {{-- <div>
                <a href="{{route('user.add')}}"><button class="btn btn-info">Create user</button></a>
            </div> --}}
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>Sno</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Sno</th>
              <th>Name</th>
              <th>Email</th>
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
              <td >
                <a href="{{route('email.create',$user->id)}}"> <i class="fas fa-share-square text-info"></i></a>&nbsp;
              </td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {{-- Mail senting section  --}}
  <div class="col-md-6">
      <div class="card">
        <div class="card-body">
            <div class=" p-0 card-header d-flex flex-row align-items-center justify-content-between">
                <div class="m-0 h6 font-weight-bold text-primary p-0">
                   single user email sent
                </div>
            </div>
            <div class="mt-5">
                <form action="{{route('email.sent')}}" method="post" >
                    @csrf
                    <div>
                        @isset($email->id)
                            <input type="email" name="email"  class="mute form-control" value="{{$email->email}}" placeholder="User Email">
                            <input type="hidden" name="user_id"  class="mute form-control" value="{{$email->id}}" placeholder="User Email">
                        @else
                        <input type="email" name="email"  class="mute form-control"  placeholder="User Email">
                        <div class="text-danger">@error('email') {{$message}}@enderror</div>
                        @endisset
                    </div>
                    <div class="mt-2">
                        <div class="form-group mb-1">
                            <label for="name">Write mail for sent</label>
                            <textarea class="tinymce form-control " id="editor" value="{{ old('email_content') }}" name="email_content"
                                placeholder="Write E-mail details"></textarea>
                                <div class="text-danger">@error('email_content') {{$message}}@enderror</div>
                            </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="form-control btn btn-outline-info"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
      </div>
  </div>
</div>
</div>
@endsection
