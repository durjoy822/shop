@extends('admin.layout.master')
@section('title')
orders
@endsection
@section('content')
<div class="container-fluid" id="container-wrapper">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Orders</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Orders</li>
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
               Orders Data
            </div>
        </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>Sno</th>
              <th>Order No</th>
              <th>Customer Info</th>
              <th>Order Total</th>
              <th>Order Date</th>
              <th>Order Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Sno</th>
              <th>Order No</th>
              <th>Customer Info</th>
              <th>Order Total</th>
              <th>Order Date</th>
              <th>Order Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @if ($orders->count())
            @foreach ($orders  as $index=>$order )
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$order->id}}</td>
                <td>{{$order->customer->name}} | {{$order->customer->mobile}}</td>
                <td>{{ number_format($order->order_total)}} Tk</td>
                <td>{{$order->order_date}}</td>
                <td>{{$order->order_status}}</td>
                <td >
                  <a href="{{route('order.details', ['id'=>$order->id])}}"  title="Show order details" class="btn btn-dark mt-1"><i class="fas fa-eye"></i></a>&nbsp;
                  <a href="{{route('order.edit', ['id'=>$order->id])}}" title="Edit order info" class="btn btn-primary mt-1"><i class="far fa-edit"></i></a>&nbsp;
                  <a href="{{route('order.invoice', ['id'=>$order->id])}}"  title="View order invoice" class="btn btn-info mt-1"> <i class="fas fa-print"></i></a>&nbsp;
                  <a href="{{route('invoice.download', ['id'=>$order->id])}}"  title="Download order invoice" class="btn btn-warning mt-1 mb-1"><i class="fas fa-download" ></i></a>&nbsp;
                  <form action="{{route('order.delete', ['id'=>$order->id])}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger "  title="Delete order" style="border: none;">
                        <i class="far fa-trash-alt "></i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4" class="text-primary "> Sub categories not found!</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
