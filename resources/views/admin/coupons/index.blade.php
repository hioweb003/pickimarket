@extends('layouts.admin')
@section('title')
    Coupons
@endsection
@section('adpagename')
  Coupons
@endsection
@section('admincontent')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Coupons  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.coupon.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
                            <div class="card-body">
                                @include('includes.errors')
                                <div class="table-responsive">
                                   @if(count($coupons)>0)
                                    <table class="table table-bordered" id="products">
                                        <thead>
                                            <tr>
                                                 <th>#</th>
                                                <th>Coupon Name</th>
                                                <th>Coupon Code</th>
                                                <th>Discount</th>
                                                <th>Usage</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                           <?php $i=0;?>
                                         @foreach ($coupons as $couponitem)
                                              <tr>
                                                   <td>{{$i+1}}</td>
                                            <td>{{$couponitem->name}}</td>
                                            <td class="cd{{$couponitem->id}}">{{$couponitem->code}}</td>
                                            <td>{{$couponitem->discount}}</td>
                                            <td>{{$couponitem->coupontime}}</td>
                                            <td>
                                            <span>
                                               @if ($couponitem->coupontime >0)
                                                    <a href="javascript:void()" title="Send Coupon" onclick="modcoupon('{{$couponitem->id}}')" class="btn btn-info btn-sm"><i class="fas fa-envelope"></i></a>
                                               @else
                                                   
                                               @endif &nbsp; 
                                                <a href="{{route('admin.coupon.edit',['id' => $couponitem->id])}}" title="Edit Coupon" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a> &nbsp; 
                                                <a href="{{route('admin.coupon.delete',['id' => $couponitem->id])}}" title="Delete Order" onclick = "return confirm('Are you sure you want to trash this coupon');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></span>
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


 <div class="modal fade" id="coupon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Coupon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('admin.coupon.send')}}" method="post">
                @csrf
                    <input type="hidden" name="code" id="cod" value="">     
                <div class="form-group">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject" required autofocus value="{{old('subject')}}">
                
                    </div> 
                   
                    <div class="form-group">
                    <textarea name="message" id="" cols="30" class="form-control" placeholder="Enter message" rows="10">{{old('message')}}</textarea>
                    </div>
                                         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-success">Send</button>
      </div>
        </form>
    </div>
  </div>
</div>
@endsection
@section('script')
    <script>
          function modcoupon(id){
            $("#coupon").modal();
            $("#cod").val($(".cd"+id).text());
        }    
      CKEDITOR.replace('message');

    $(document).ready(function(){
       $("#products").DataTable();
    });
</script>
@endsection
