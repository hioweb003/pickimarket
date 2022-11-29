<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Invoice</title>

  
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}">
    <!-- Fonts -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <!-- Datatables styles -->
      <link href="{{asset('css/jquery.dataTables.css')}}" rel="stylesheet" />
      <link href="{{asset('css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
    <!-- Styles -->
   <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
<style>
  @media print{
    .no-print{
      display: none;
    }
  }
</style>
</head>
<body>
 <div class="container">
  <div class="d-flex">
    <a href="{{URL::previous()}}" class="btn btn-primary text-center btn-sm my-2 no-print">Back</a>
    <a href="javascript:void(0)" class="btn btn-success text-center btn-sm my-2 mx-3 no-print" onclick="window.print()">Print</a>
  </div>
   <div class="my-4"><h2 class="text-center">INVOICE</h2></div><hr>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
         <div class="float-right">
                <strong>Order No_ :</strong> <span>{{$order->order_number}}</span>
             
            </div>         
        </div>    
    </div> 

     <div class="row">
       <div class="col-md-8">
           <div class="float-left">
          <img src="{{asset('images/logo.png')}}" alt="logo" width="300" height="86">
          <p>Address: {{$contpg ? $contpg->address : ""}}</p>
          <p>Email: {{$contpg ? $contpg->email : ""}}</p>
          <p>Phone: {{$contpg ? $contpg->phone : ""}}</p>
     </div>
       </div>
      <div class="col-md-4"></div>
     </div>
     
  <h2 class="text-center mt-4">Customer Details</h2>
  <p>{{$order->shipping_name}}</p>
  <p>{{$order->shipping_email}}</p>
   <p>{{$order->shipping_phone}}</p>
  <p>{{$order->shipping_address}}, {{$order->shipping_country}}</p>
  

<h4 class="text-center">Order Details</h4>
   <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Size</th>                    
                    <th>Total Price</th>                    
                </thead>
                <tbody>
                    @foreach ($order->items as $item)
                        <tr>
                        <td>{{$item->pro_name}}</td>
                        <td>{{'X '.$item->pivot->quantity}}</td>
                        <td>{{$item->pivot->price}}</td>  
                          <td>
                               @if (is_null($item->pivot->pro_attributes))
                             N/A                 
                          @else
                          {{$item->pivot->pro_attributes}}  
                            @endif  
                          </td>
                          <td>{{"$".number_format($item->pivot->quantity * $item->pivot->price)}}</td>
                        </tr>  
                    @endforeach
                                                            
                </tbody>
            </table>
            <div class="my-3 col-4">
              <table class="table table-bordered">
                <tr><td class="font-weight-bold">Number Of Item</td><td>{{$order->item_count}}</td></tr>
                @if (!is_null($order->shipping_cost))
                <tr><td class="font-weight-bold">Shipping</td><td>{{'$'.number_format($order->shipping_cost)}}</td></tr>
                @endif
                @if (!is_null($order->discount))
                <tr><td class="font-weight-bold">Discount</td><td>{{'$'.number_format($order->discount)}}</td></tr>
                @endif
                <tr><td class="font-weight-bold">TOTAL</td><td>{{number_format($order->grand_total)}}</td></tr>
              </table>
                
            </div>
        </div>
 </div>


          <script src="{{ asset('js/jquery.min.js') }}"></script>
           <script src="{{ asset('js/jqueryprintpage.js') }}"></script>
            <script src="{{ asset('js/popper.min.js') }}"></script>
              <script src="{{ asset('js/bootstrap.min.js') }}"></script>
               <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
               <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
              <script src="{{ asset('js/scripts.js') }}"></script>
            <script src="{{ asset('js/all.js') }}"></script>
             <script src="{{asset('js/toastr.min.js')}}"></script>
             <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
           <script src="{{asset('js/printpage.js')}}"></script>
           <script>
            $(document).ready(function(){
             print();
            });
          </script>
</body>
</html>