@extends('layouts.admin')
@section('title')
    Users
@endsection
@section('adpagename')
 Users
@endsection
@section('admincontent')
   <!-- Main-body start -->
  <div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Admin Users  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.user.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="users">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Permission</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             @foreach ($adusers as $user)
                                                 <tr>
                                            <td>{{$user->username}}                                   
                                                </td>
                                            <td>
                                               @if ($user->roles)
                                            <a href="{{route('admin.not_admin',['id' => $user->id])}}" class="btn btn-warning btn-xs">Remove Permission</a>                            
                                                @else
                                                    <a href="{{route('admin.make_admin',['id' => $user->id])}}" class="btn btn-success btn-xs">Make Admin</a>
                                                @endif
                                            </td>
                                            <td>
                                                  @if ($user->roles != 1)
                                            <span> <a href="{{route('admin.delete',['id' => $user->id])}}" onclick = "return confirm('Are you sure you want to trash this user');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></span>
                                                @endif
                                            </td>
                                            </tr>  
                                             @endforeach

                                        </tbody>
                                    </table>
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
       $("#users").DataTable();
    });
</script>
@endsection
