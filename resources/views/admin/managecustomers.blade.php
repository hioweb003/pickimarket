@extends('layouts.admin')
@section('title')
    Manage Customers
@endsection
@section('adpagename')
 Customers
@endsection
@section('admincontent')
   <!-- Main-body start -->
  <div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Manage Customers  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void" onclick="modbroadcast()" class="btn btn-outline-info btn-sm float-right">Send Broadcast</a></div>
                            <div class="card-body">
                                @include('includes.errors')
                                <div class="table-responsive">
                                    @if(count($users)>0)
                                    <table class="table table-bordered" id="customers">
                                        <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            @foreach ($users as $user)
                                              <tr>
                                              <td>{{$user->name}}</td>
                                              <td>{{$user->address}}</td>
                                              <td>{{$user->email}}</td>
                                              <td>{{$user->state}}</td>
                                              <td>{{$user->country}}</td>
                                             <!-- <td>
                                              <span> <a href="" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a> &nbsp; <a href="" onclick = "return confirm('Are you sure you want to trash this Store');" class="btn btn-danger btm-sm"><i class="fas fa-trash"></i></a></span>
                                             </td>-->
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                      <div class="alert alert-info">Sorry No Data Found</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                            
    <div class="modal fade" id="broadcst" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send Broadcast Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('send.msgusers')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        
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
  </div>
 </div>
</div>
@endsection
@section('script')
    <script>
          function modbroadcast(){
            $("#broadcst").modal();
        }    
      CKEDITOR.replace('message');

    $(document).ready(function(){
       $("#customers").DataTable();
    });
</script>
@endsection
