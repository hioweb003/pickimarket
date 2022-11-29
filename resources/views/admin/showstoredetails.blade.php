@extends('layouts.admin')
@section('title')
    Manage Stores
@endsection
@section('adpagename')
  Details
@endsection
@section('admincontent')
<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Store Profile  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{URL::previous()}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                              <div class="row">
                                  <div class="col-md-7">
                                        <div class="row justify-content-start my-4">
                                        <img src="{{asset($profile->profileimage)}}" width="80px" height="80px" alt="" srcset="">
                                </div>
                                  <div class="table-responsive">
                                    <table class="table table-bordered" id="mcompany">                                      
                                      
                                        <tbody>
                                            <tr><td>Store Code</td> <td>{{$profile->store_code}}</td></tr>
                                            <tr><td>Store Name</td> <td>{{$profile->vendor->store_name}}</td></tr>
                                            <tr><td>Email</td> <td>{{$profile->vendor->email}}</td></tr>
                                            <tr><td>Address</td> <td><a href="https://www.google.com/maps/place/{{$profile->address}}" target="_blank" title="Click to view on map">{{$profile->address}}</a></td></tr>
                                             <tr><td>Account Name</td> <td>{{$profile->account_name}}</td></tr>
                                            <tr><td>Account Number</td> <td>{{$profile->account_no}}</td></tr>
                                            <tr><td>Bank</td> <td>{{($profile->bank)}}</td></tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                  </div>
                                  <div class="col-md-5">
                                     <div class="ml-2">
                                         <p class="text-center my-2">About Store</p>
                                          <p class="text-center">{!!$profile->about!!}</p>
                                   </div>                           
                                  </div>
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
       $("#stores").DataTable();      
    });
</script>
@endsection
