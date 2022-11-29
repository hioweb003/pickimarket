@extends('layouts.admin')
@section('title')
    Orders
@endsection
@section('adpagename')
  Orders
@endsection
@section('admincontent')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Orders</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                   @if(count($order)>0)
                                    <table class="table table-bordered" id="orders">
                                        <thead>
                                            <tr>
                                                 <th>#</th>
                                                 <th>Order No</th>
                                                <th>Customer Name</th>                                              
                                                <th>No Of Items</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             <?php $i=0;?>
                                                @foreach ($order as $orderitem)
                                                   <tr>
                                                       <td>{{$i+1}}</td>
                                                   <td>{{$orderitem->order_number}}</td>
                                                   <td>{{$orderitem->shipping_name}}</td>
                                                   <td>{{$orderitem->item_count}}</td>
                                                   <td><span class="badge 
                                                    <?php 
                                                     if($orderitem->status == "pending"){
                                                         echo "badge-danger";
                                                     }elseif($orderitem->status == 'processing'){
                                                         echo 'badge-warning';
                                                     }elseif($orderitem->status == 'completed'){
                                                         echo 'badge-success';
                                                     }
                                                    ?>
                                                   py-1 px-2">{{$orderitem->status}}</span></td>
                                                   <td>{{date('d M, Y',strtotime($orderitem->created_at))}}</td>
                                                <td>
                                                    <span>
                                                        @if ($orderitem->status == 'processing')
                                                         <a href="{{route('admin.confirmorder',['id' => $orderitem->id])}}" class="btn btn-success btn-sm" title="Complete order"><i class="fas fa-check"></i></a> 
                                                        @endif
                                                    <a href="{{route('admin.order.show',['id' => $orderitem->id])}}" class="btn btn-primary btn-sm" title="View Order"><i class="fas fa-eye"></i></a> &nbsp; 
                                                          @if (Auth::guard('admin')->user()->roles == 1)
                                                    <a href="{{route('admin.order.delete',['id' => $orderitem->id])}}" onclick = "return confirm('Are you sure you want to trash this order');" class="btn btn-danger btn-sm" title="Delete Order"><i class="fas fa-trash"></i></a>
                                                          @endif
                                                    </span>
                                                </td>
                                                   </tr>
                                                   <?php $i++;?>
                                                @endforeach        
                                        </tbody>
                                    </table>
                                   @else
                                    <div class="alert alert-info">Sorry No Data Found</div>
                                   @endif
                                </div>
                            </div>
                        </div>
@endsection
@section('script')
    <script>
    $(document).ready(function(){
       $("#orders").DataTable();
    });
</script>
@endsection
