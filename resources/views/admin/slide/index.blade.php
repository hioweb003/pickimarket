@extends('layouts.admin')
@section('title')
    Manage Slide and Images
@endsection
@section('adpagename')
  Profile
@endsection
@section('admincontent')
     <!-- Main-body start -->
  <div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Manage Slides & Images &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.slide.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if(count($slides)>0)
                                    <table class="table table-bordered" id="stores">
                                        <thead>
                                            <tr>
                                                 <th>#</th>  
                                                <th>Images</th>
                                                <th>content</th>
                                                <th>Created By</th>
                                                 <th>status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             <?php $i=0;?>
                                        @foreach ($slides as $slide)
                                               <tr>
                                                    <td>{{$i+1}}</td>
                                                    <td>
                                                    <img src="{{asset($slide->image)}}" width="60px" height="50px" alt="">   
                                                    </td>
                                                    <td>
                                                        <p>{{$slide->content}}</p>
                                                    </td>
                                                    <td>{{$slide->position}}</td> 
                                                     <td>@if ($slide->status)
                                                         <a href="{{route('admin.slide.deactivate',['id' => $slide->id])}}">Deactivate</a>
                                                     @else
                                                          <a href="{{route('admin.slide.activate',['id' => $slide->id])}}">Activate</a>
                                                     @endif</td>                                        
                                                    <td>
                                                    <span> <a title="Edit"  href="{{route('admin.slide.edit',['id' => $slide->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;<a title="Delete" href="{{route('admin.slide.delete',['id' => $slide->id])}}" onclick = "return confirm('Are you sure you want to trash this image');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></span>
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
