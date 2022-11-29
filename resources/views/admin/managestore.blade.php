@extends('layouts.admin')
@section('title')
    Manage Stores
@endsection
@section('adpagename')
 Stores
@endsection
@section('admincontent')
   <!-- Main-body start -->
  <div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Manage Stores</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    {{-- @if(count($vendors) > 0) --}}
                                     <div class="text-center edloader" style="display: none; ">
                                             <img src="{{asset('css/ajax-loader.gif')}}" alt="">
                                   </div>
                                    <table class="table table-bordered" id="stores">
                                        <thead>
                                            <tr>
                                                <th>Stores Name</th>
                                                <th>Stores Code</th>
                                                <th>Store Contact</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                          
                                           <tbody>
                                            @foreach ($vendors as $vendor)
                                               <tr>
                                               <td>{{$vendor->store_name}}</td>
                                               <td>{{$vendor->storeprofile->store_code ?? " "}}</td>
                                               <td>{{$vendor->storeprofile->phone ?? " "}}</td>
                                               <td>{{$vendor->storeprofile->address ?? " "}},{{$vendor->storeprofile->country ?? " "}}</td>
                                               <td>
                                                   @if ($vendor->status)
                                               <a href="{{route('disapprove',['id' => $vendor->id])}}" class="btn btn-warning">Disable Approval</a>
                                                  @else
                                               <a href="{{route('approve',['id' => $vendor->id])}}" class="btn btn-success"> Needs Approval</a>
                                                   @endif
                                               </td>
                                                    <td>
                                                    <span> <a href="{{route('view.storeprofile',['id' => $vendor->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a> 
                                                          @if (Auth::guard('admin')->user()->roles == 1)
                                                    <a href="{{route('deletestore',['id' => $vendor->id])}}" onclick = "return confirm('Are you sure you want to trash this Store');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                          @endif
                                                      </span>
                                                    </td>
                                                   
                                            </tr>
                                            @endforeach
                                        </tbody>
                                         
                                    </table>
                                     {{-- @else
                                          <div class="alert alert-info">Sorry No Data Found</div>
                                          @endif --}}
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
       $("#stores").DataTable({"pageLength":50});      
    });
</script>
@endsection
