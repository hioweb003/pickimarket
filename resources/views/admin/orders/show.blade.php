@extends('layouts.admin')
@section('title')
    Orders Details
@endsection
@section('adpagename')
  Orders Details
@endsection

@section('amincontent')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Orders Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.order.index')}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                <div class="row">
                                            <div class="col-md-7">
                                                <p>Order Number: {{$order->order_number}}</p>
                                                <p>Number Of Items: {{$order->item_count}}</p>
                                                    <p>Order Status: {{$order->status}}</p>
                                                <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr><td>Name</td><td>{{$order->shipping_name}}</td></tr>
                                                        <tr><td>Email</td><td>{{$order->shipping_email}}</td></tr> 
                                                        <tr><td>Address</td><td>{{$order->shipping_address}}</td></tr>  
                                                        <tr><td>Phone</td><td>{{$order->shipping_phone}}</td></tr>  
                                                        <tr><td>Region</td><td>{{$order->shipping_state}}, {{$order->shipping_country}}</td></tr>  
                                                        {{--<tr><td>Payment Type</td><td>{{$orders->payment_method}}</td></tr>            
                                                        <tr><td>Shipping Type</td><td>{{$orders->shipping_method}}</td></tr> --}}
                                                        <tr><td>Payment</td><td>
                                                        @if ($order->is_paid)
                                                            Paid 
                                                        @else
                                                            No Payment Yet
                                                        @endif     
                                                        
                                                        </td></tr>   
                                                    </tbody>
                                                </table>
                                        </div>
                                            </div>
                                    <div class="col-md-5">
                                        
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Items Details</div>
                                        <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Size</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->items as $item)
                                              <tr>
                                              <td><a href="{{route('getimg',['img' => $item->pro_name])}}" id="showproimg" title="Click to view product image">{{$item->pro_name}}</a></td>
                                              <td>{{$item->pivot->quantity}}</td>
                                              <td>{{"$".number_format($item->pivot->price)}}</td>
                                              <td>  
                                                 @if (is_null($item->pivot->pro_attributes))
                                                   N/A
                                                 @else
                                                    {{$item->pivot->pro_attributes}}  
                                                 @endif                                           
                                              </td>
                                              <td>
                                               {{"$".number_format($item->pivot->quantity * $item->pivot->price)}}
                                              </td>
                                                </tr> 
                                            @endforeach
                                            <tr>
                                                <td colspan="5" align="right"><strong>Shipping</strong>: &nbsp;{{!is_null($order->shipping_cost) ? '$'.number_format($order->shipping_cost)  : "$0.0"}}</td>
                                             </tr>
                                            <tr>
                                            <td colspan="5" align="right"><strong>Discount({{$order->discount_type}})</strong>: 
                                              &nbsp;{{!is_null($order->discount) ? '$'.number_format($order->discount)  : "$0.0"}}
                                            </td>
                                            </tr>
                                            <tr>
                                            <td colspan="5" align="right"><strong>Total</strong>: &nbsp;{{'$'.number_format($order->grand_total)}}</td>
                                          </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            <p class="text-center my-5"><a href="{{Route('admin.prntpg',['id' => $order->id])}}" class="btn btn-outline-info printbtn">Print Order</a></p> 
                             </div>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
@section('script')
    <script>
    $(document).ready(function(){
        $(".printbtn").printPage();
    });
</script>
@endsection
