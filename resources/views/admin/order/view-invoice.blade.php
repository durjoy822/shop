@extends('admin.layout.master')
@section('title')
view invoice
@endsection
@section('content')
<!-------invoice style-------->
<style>
    body {
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        text-align: center;
        color: #777;
    }

    body h1 {
        font-weight: 300;
        margin-bottom: 0px;
        padding-bottom: 0px;
        color: #000;
    }

    body h3 {
        font-weight: 300;
        margin-top: 10px;
        margin-bottom: 20px;
        font-style: italic;
        color: #555;
    }

    body a {
        color: #06f;
    }

    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
        border-collapse: collapse;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }

    }
</style>
<!---invoice main section------>
{{-- @php dd($order) @endphp --}}
<div class="invoice-box">
    <table>
        <tr class="top">
            <td colspan="5">
                <table>
                    <tr>
                        <td class="title">
                            <img src="{{asset('admin')}}/img/logo/invoice_logo.jpg" alt="Company logo" style="width: 50%; max-width: 300px; height:100px" />
                        </td>

                        <td>
                            Invoice #: 000{{$order->id}}<br />
                            Order Date:  {{$order->order_date}}<br />
                            Invoice Date:  {{date('y-m-d')}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="5">
                <table>
                    <tr>
                        <td>
                            <h5>Billing Information</h5>
                           Name:  {{$order->customer->name}}<br />
                           Mobile: {{$order->customer->mobile}} <br />
                           Email: {{$order->customer->email}} <br />
                           Country: {{$order->customer->state}} <br />

                        </td>

                        <td>
                            <h5>Delivery Information</h5>
                            {{$order->customer->address}} <br />

                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading " >
            <div style="margin-bottom: 5px ;">
                <td colspan="4">Payment Method</td>
                <td>{{$order->payment_type=='cod'?'Cash on Delivery':'Online payment'}}</td>
            </div>
        </tr>
        <tr >
        <td></td>
        <td></td>
        </tr>

        <tr class="heading" style="text-align:center" >
            <td>Sl No</td>
            <td style="text-align:center">Item </td>
            <td>Quantity</td>
            <td style="text-align:center">Unit Price</td>
            <td style="text-align:right">Total Price </td>
        </tr>

        @foreach ($order->orderDetails as $index=>$order)
        <tr class="item" style="text-align:center" >
            <td>{{$index+1}}</td>
            <td style="text-align:center">{{$order->product_name}}</td>
            <td>{{$order->product_qty}}</td>
            <td style="text-align:center">{{number_format($order->product_price)}} Tk</td>
            <td style="text-align:right">{{number_format($order->product_price * $order->product_qty)}} Tk</td>
        </tr>
        @endforeach
        <tr class="total">
            <td colspan="4"></td>
            <td style="text-align:right">Total: </td>
        </tr>
    </table>
</div>
@endsection
