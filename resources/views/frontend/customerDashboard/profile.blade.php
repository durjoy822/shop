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
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-3 text-center">
                                            <img class="text-center rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCfUdIqrwtbIQXr8OGLelaSzkzpx8D2vu_CQ&usqp=CAU"  style="width:100%; height:130px">
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control mt-2 py-5 px-4" type="file" >
                                        </div>
                                    </div>

                                    <label class="mt-3" for="email">Full  Name</label>
                                    <input class="form-control mt-2" type="text" name="email">

                                    <label class="mt-3" for="email">Email</label>
                                    <input class="form-control mt-2" type="text" name="email">

                                    <label class="mt-3" for="phone">Phone</label>
                                    <input class="form-control mt-2" type="number" name="phone">

                                    <label class="mt-3" for="phone">Country</label>
                                    <div class="input-group mt-2">
                                        <label class="input-group-text" for="inputGroupSelect01">Select Country</label>
                                        <select class="form-select" id="inputGroupSelect01">
                                          <option selected>Choose...</option>
                                          <option value="bangladesh"> Bangladesh</option>
                                        </select>
                                      </div>

                                    <label class="mt-3" for="phone">State</label>
                                    <div class="input-group  mt-2">
                                        <label class="input-group-text" for="inputGroupSelect01">Select State</label>
                                        <select class="form-select" id="inputGroupSelect01">
                                          <option selected>Choose...</option>
                                          <option value="bangladesh"> Dhaka</option>
                                          <option value="bangladesh"> Rajshahi</option>
                                          <option value="bangladesh"> Pabna</option>
                                        </select>
                                      </div>

                                    <label class="mt-3" for="zip">Zip Code</label>
                                    <input class="form-control mt-2" type="text" name="zip">

                                    <label class="mt-3" for="nid">Nid Number</label>
                                    <input class="form-control mt-2" type="text" name="nid">

                                    <label class="mt-3" for="address">Address</label>
                                    <input class="form-control mt-2" type="text" name="nid">

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


