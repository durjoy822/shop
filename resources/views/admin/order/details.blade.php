@extends('admin.layout.master')
@section('title')
order info
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Order Product Info </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a  href="./">Blog</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Blog details </li>
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
                Order basic info
            </div>
            <div>
                <a href="{{route('order.index')}}">
                    <button class="btn btn-info">
                        <i class="fas fa-angle-double-left"></i>  Previeous
                    </button>
                </a>
                <a href="">
                    <button class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                    </button>
                </a>
            </div>
        </div>
      <div class="table-responsive p-3 table-hover table-striped">
        <table class="table align-items-center table-striped" >
          <thead >
            <tr>
                <th>Order No</th>
                <th>{{$order->id}}</th>
            </tr>
            <tr>
                <th>Order Date</th>
                <th>{{$order->order_date}}</th>
            </tr>
            <tr>
                <th>Order Total</th>
                <th>{{number_format($order->order_total)}}</th>
            </tr>
            <tr>
                <th>Tax Total</th>
                <th>{{$order->tax_total}}</th>
            </tr>
            <tr>
                <th>Shipping Cost</th>
                <th>{{$order->shipping_total}}</th>
            </tr>
            <tr>
                <th>Customer Name</th>
                <th>{{$order->customer->name}}</th>
            </tr>
            <tr>
                <th>Customer Mobile</th>
                <th>{{$order->customer->mobile}}</th>
            </tr>
            <tr>
                <th>Delivery Address</th>
                <th>{{$order->delivery_address}}</th>
            </tr>
            <tr>
                <th>Payment method</th>
                <th>{{$order->payment_type=='cod'?'Cash on delevery':'Online'}}</th>
            </tr>
            <tr>
                <th>Payment Status</th>
                <th>{{$order->payment_status}}</th>
            </tr>
            <tr>
                <th>Payment Date</th>
                <th>{{$order->payment_date}}</th>
            </tr>
            <tr>
                <th>Delivery Status</th>
                <th>{{$order->delivery_status}}</th>
            </tr>

        </table>
      </div>
    </div>
    <!--product information here -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0 h6 font-weight-bold text-primary">
                 Order Product Info
            </div>
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
            <thead class="thead-light">
              <tr>
                <tr>
                <th>Sno</th>
                <th>Product Name</th>
                <th>Product Qty</th>
                <th>Product price</th>
                <th>Product Subtotal</th>
                  </tr>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Sno</th>
                <th>Product Name</th>
                <th>Product Qty</th>
                <th>Product price</th>
                <th>Product Subtotal</th>
              </tr>
            </tfoot>
            <tbody>

              @foreach ($order->orderDetails  as $index=>$order )
              <tr>
                  <td>{{$index + 1}}</td>
                  <td>{{$order->product_name}}</td>
                  <td>{{$order->product_qty}} </td>
                  <td>{{ number_format($order->product_price)}} Tk</td>
                  <td>{{number_format($order->product_qty * $order->product_price)}} Tk</td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
@endsection

