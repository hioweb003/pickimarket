@extends('layouts.admin')
@section('title')
    Coupon
@endsection
@section('adpagename')
  Coupon Create
@endsection

@section('admincontent')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-pencil mr-1"></i>Create Coupon  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{URL::previous()}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    @include('includes.errors')
                            <form action="{{route('admin.coupon.store')}}" method="post">
                                @csrf
                                 <div class="form-group">
                                     <label>Coupon Name</label>
                                 <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" autofocus placeholder="Enter Coupon Name">
                                     </div> 
                                       <div class="form-group">
                                        <label>Coupon Code</label>
                                     <div class="d-flex">
                                        <input type="text" name="code" id="code" class="form-control col-6" value="{{old('code')}}" placeholder="Eg:zuhd753ch">
                                 <a id="generatecode" type="button" class="btn btn-primary btn-sm my-1 ml-2 text-white" style="cursor: pointer">Generate Coupon Code</a>
                                     </div>
                                     </div> 
                                     <div class="form-group">
                                        <label>Discount Amount(in Percentage eg 25)</label>
                                        <input type="text" name="discount" id="discount" class="form-control" value="{{old('discount')}}" placeholder="Enter Discount Amount Eg: 25">
                                     </div> 
                                      <div class="form-group">
                                        <label>Coupon Time(Numbers Of Times To be use)</label>
                                        <input type="number" name="coupontime" id="coupontime" class="form-control" value="{{old('coupontime')}}" placeholder="Enter Numbers Of Time To be use">
                                     </div> 
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Save Coupon</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
@endsection
@section('script')
     <script>
         $(document).ready(function(){
               $("#generatecode").click(function(){
                   var rnum = "";
                     rumn = Math.floor(Math.random() * 1000000);
                     $("#code").val(rumn);
               });
         });
    </script>
@endsection
