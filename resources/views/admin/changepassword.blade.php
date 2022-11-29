@extends('layouts.admin')
@section('title')
    Change Password
@endsection
@section('adpagename')
 Change Password
@endsection
@section('admincontent')
   <!-- Main-body start -->
  <div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Change Password </div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    @include('includes.errors')
                            <form action="{{route('change.pass')}}" method="post">
                                @csrf
                                
                                 <div class="form-group">
                                 <input type="password" name="password" id="password" class="form-control" @error('password') is-invalid @enderror" placeholder="Enter Password" autofocus>
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                     </div> 
                                      <div class="form-group">
                                 <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"  placeholder="Enter Comfirm Password">
                                     </div>
                                    <input type="hidden" name="id" id="id" value="{{Auth::guard('admin')->user()->id}}"> 
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Change Password</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
          </div>
     </div>
  </div>
@endsection

