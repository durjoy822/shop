@extends('frontend.layout.master')
@section('title')
   profile
@endsection
@section('content')

<!--breadcrumbs-->
    <div class=breadcrumbs>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class=breadcrumbs-content>
                        <h1 class=page-title>Customer Dashboard</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class=breadcrumb-nav>
                        <li><a href={{route('home')}}><i class="lni lni-home"></i> Home</a></li>
                        <li>Customer Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!--Account info setting section-->
    <section class="about-us section pt-4 ">
        <div class=container>
           <div class="row">
            <div class="col-md-4">
                @include('frontend.layout.dashboard_sidebar');
            </div>
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-body ">
                        <div class="order">
                        <div class="text-center"><h5>Profile</h5></div>
                        <hr>
                        <div class="col-md-12">
                            <div>
                                <form action="{{route('customerProfile.update',['id'=>$customerProfile->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            @if ($customerProfile->image)
                                            <img class="text-center rounded" src="{{asset($customerProfile->image)}}"  style="width:100%; height:130px">
                                            @else
                                            <img class="text-center rounded" src="https://st3.depositphotos.com/15648834/17930/v/450/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"  style="width:100%; height:130px">
                                            @endif
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control mt-2 py-5 px-4" name="image" type="file" >
                                        </div>
                                    </div>

                                    <label class="mt-3" for="email">Full  Name</label>
                                    <input class="form-control mt-2" value="{{$customerProfile->name}}" value="{{old('name')}}" type="text" name="name">
                                    <div class="text-danger">@error('name'){{$message}}@enderror</div>

                                    <label class="mt-3" for="email">Email</label>
                                    <input class="form-control mt-2" value="{{$customerProfile->email}}" value="{{old('email')}}" type="text" name="email">
                                    <div class="text-danger">@error('email'){{$message}}@enderror</div>

                                    <label class="mt-3" for="phone">Phone</label>
                                    <input class="form-control mt-2" value="{{$customerProfile->phone}}" value="{{old('phone')}}" type="number" name="phone">
                                    <div class="text-danger">@error('phone'){{$message}}@enderror</div>

                                    <label class="mt-3" for="phone">Country</label>
                                    <div class="input-group mt-2">
                                        <label class="input-group-text" for="inputGroupSelect01">Select Country</label>
                                        <select class="form-select" name="country" id="inputGroupSelect01">
                                          <option selected value="">Choose...</option>
                                          <option value="bangladesh" {{$customerProfile->country=="bangladesh"?'selected':''}}> Bangladesh</option>
                                        </select>
                                      </div>

                                    <label class="mt-3" for="state">State</label>
                                    <div class="input-group  mt-2">
                                        <label class="input-group-text" for="inputGroupSelect01">Select State</label>
                                        <select class="form-select" name="state" id="inputGroupSelect01">
                                          <option selected value="">Choose...</option>
                                          <option value="dhaka"  {{$customerProfile->state=="dhaka"?'selected':''}}> Dhaka</option>
                                          <option value="rajshahi" {{$customerProfile->state=="rajshahi"?'selected':''}}> Rajshahi</option>
                                          <option value="pabna" {{$customerProfile->state=="pabna"?'selected':''}}> Pabna</option>
                                        </select>
                                      </div>

                                    <label class="mt-3" for="zip">Zip Code</label>
                                    <input class="form-control mt-2"  value="{{$customerProfile->zip}}" value="{{old('zip')}}" type="text" name="zip">
                                    <div class="text-danger">@error('zip'){{$message}}@enderror</div>

                                    <label class="mt-3" for="nid">Nid Number</label>
                                    <input class="form-control mt-2"  value="{{$customerProfile->nid}}" value="{{old('nid')}}" type="text" name="nid">
                                    <div class="text-danger">@error('nid'){{$message}}@enderror</div>

                                    <label class="mt-3" for="address">Address</label>
                                    <input class="form-control mt-2"  value="{{$customerProfile->address}}" value="{{old('address')}}" type="text" name="address">
                                    <div class="text-danger">@error('address'){{$message}}@enderror</div>

                                    <input type="submit" class="form-control btn btn-info mt-2" value="Submit">
                                  </form>
                               </div>
                        </div>
                        <div class="col-md-6">

                        </div>

                    </div>
                </div>
                </div>
            </div>
           </div>
        </div>
    </section>

@endsection


