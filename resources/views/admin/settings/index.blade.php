@extends('admin.layout.master')
@section('title')
settings
@endsection
@section('content')
<style>
     span.select2.select2-container.select2-container--classic {
            width: 100% !important;
        }
        .setting .card:hover{
            background: rgb(161, 235, 132);
            transition: 2s;
        }

</style>
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Settings</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Settings</li>
    </ol>
</div>
<!--Different  setting link-->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!--User Settings-->
                    <div class="col-md-4 p-2 setting">
                        <div class="card">
                            <div class="card-body">
                                <div >
                                    <i class="fas fa-users-cog"></i>
                                    User Settings
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Roles Settings-->
                    <div class="col-md-4 p-2 setting">
                        <div class="card">
                            <div class="card-body">
                                <div >
                                     <i class="fas fa-user-shield  "></i>
                                     Roles Settins
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Optimize Settings-->
                    <div class="col-md-4 p-2 setting">
                        <div class="card">
                            <div class="card-body">
                                <div >
                                    <i class="fas fa-rocket"></i>
                                    Optimize
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
<!--setting main contend start-->
<div class="col-lg-12 px-0 mt-3">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0 h6 font-weight-bold text-primary">
                Settings
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-5">
                        <!--name-->
                        <div class="form-group mb-1">
                            <label for="name">App name (site name)</label>
                            <input type="text" class="form-control"  value="{{$setting->name}}" name="name" id="name"
                                placeholder="App name ">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>
                        </div>
                         <!--Email-->
                        <div class="form-group mb-1">
                            <label for="email">Email</label>
                            <input type="text" class="form-control"  value="{{$setting->email}}"  name="email" id="email"
                                placeholder="Email">
                                <div class="text-danger">@error('email') {{$message}} @enderror</div>
                        </div>
                         <!--Phone-->
                        <div class="form-group mb-1">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control"  value="{{$setting->phone}}"  name="phone" id="phone"
                                placeholder="Phone">
                                <div class="text-danger">@error('phone') {{$message}} @enderror</div>
                        </div>
                         <!--Address-->
                        <div class="form-group mb-1">
                            <label for="address">Addres</label>
                            <input type="text" class="form-control"  value="{{$setting->address}}"  name="address" id="address"
                                placeholder="Address">
                                <div class="text-danger">@error('address') {{$message}} @enderror</div>
                        </div>
                         <!--Design and developed-->
                        <div class="form-group d-lg-block d-none">
                            <label for="design">Design & Developed by:</label>
                            <input type="text" class="form-control"  value="{{$setting->design}}"  name="design" id="design"
                                placeholder="Design & Developed by">
                                <div class="text-danger">@error('design') {{$message}} @enderror</div>
                        </div>


                    </div>
                    <div class="col-lg-7">
                        <!--Dark logo-->
                        <div class="row">
                            <div class="col-lg-8 pb-2">
                                <label for="dark_logo">Dark logo</label>
                                <input class="form-control " name="dark_logo" type="file" >
                            </div>
                            <div class="col-lg-4  pt-lg-5">
                                <img src="{{asset($setting->dark_logo)}}"  alt="" class="col-8"  id="image-previewer"  >
                            </div>
                        </div>
                         <!--Light logo-->
                        <div class="row">
                            <div class="col-lg-8 pb-2">
                                <label for="light_logo">Light logo</label>
                                <input class="form-control " name="light_logo" type="file" >
                            </div>
                            <div class="col-lg-4 pt-lg-5">
                                <img src="{{asset($setting->light_logo)}}"  alt="" class="col-8"  id="image-previewer"  >
                            </div>
                        </div>
                         <!--Favicon-->
                        <div class="row">
                            <div class="col-lg-8 pb-2">
                                <label for="favicon">Favicon</label>
                                <input class="form-control " name="favicon" type="file" >
                            </div>
                            <div class="col-lg-4 pt-lg-5">
                                <img src="{{asset($setting->favicon)}}"  alt="" class="col-8"  id="image-previewer"  >
                            </div>
                        </div>
                        <!--row-->
                        <div class="row">
                             <!--Opening day-->
                             <div class="col-lg-6">
                                <div class="form-group mb-1">
                                    <label for="opening_day">Opening Day </label>
                                    <select class="js-example-basic-single" name="opening_day" id="opening_day">
                                        <option value="">Select</option>
                                        <option value="Saturday" {{ $setting->opening_day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                        <option value="Sunday" {{ $setting->opening_day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                        <option value="Monday" {{ $setting->opening_day == 'Monday' ? 'selected' : '' }}>Monday</option>
                                        <option value="Tuesday" {{ $setting->opening_day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                        <option value="Wednesday" {{ $setting->opening_day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                        <option value="Thursday" {{ $setting->opening_day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                        <option value="Friday" {{ $setting->opening_day == 'Friday' ? 'selected' : '' }}>Friday</option>
                                    </select>
                                    <div class="text-danger pt-1">@error('opening_day') {{ $message }} @enderror </div>
                                </div>
                            </div>

                             <!--Closing day-->
                            <div class="col-lg-6">
                                <div class="form-group mb-1">
                                    <label for="closeing_day">Closeing Day </label>
                                    <select class="js-example-basic-single" name="closeing_day" id="closeing_day">
                                        <option value="" >Select</option>
                                        <option value="Saturday" {{$setting->closeing_day=='Saturday'?'selected':''}}>Saturday</option>
                                        <option value="Sunday"{{$setting->closeing_day=='Sunday'?'selected':''}}>Sunday</option>
                                        <option value="Monday"{{$setting->closeing_day=='Monday'?'selected':''}}>Monday</option>
                                        <option value="Tuesday"{{$setting->closeing_day=='Tuesday'?'selected':''}}>Tuesday</option>
                                        <option value="Wednesday"{{$setting->closeing_day=='Wednesday'?'selected':''}}>Wednesday</option>
                                        <option value="Thursday"{{$setting->closeing_day=='Thursday'?'selected':''}}>Saturday</option>
                                        <option value="Friday"{{$setting->closeing_day=='Friday'?'selected':''}}>Friday</option>
                                    </select>
                                    <div class="text-danger pt-1">@error('closeing_day') {{ $message }} @enderror </div>

                                </div>
                            </div>

                        </div>
                         <!--Row-->
                        <div class="row">
                             <!--Opening time-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="opening_time">Opening Time</label>
                                    <input type="time" class="form-control"  value="{{$setting->opening_time}}"  name="opening_time" id="opening_time">
                                        <div class="text-danger">@error('opening_time') {{$message}} @enderror</div>
                                </div>
                            </div>
                             <!--Closing time-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="closeing_time">Closeing Time</label>
                                    <input type="time" class="form-control"  value="{{$setting->closeing_time}}"  name="closeing_time" id="closeing_time">
                                        <div class="text-danger">@error('closeing_time') {{$message}} @enderror</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group mb-1 d-block d-lg-none">
                        <label for="design">Design & Developed by:</label>
                        <input type="text" class="form-control"  value="{{$setting->design}}"  name="design" id="design"
                            placeholder="Design & Developed by">
                            <div class="text-danger">@error('design') {{$message}} @enderror</div>
                    </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>

    </div>
  </div>
</div>
@endsection
