@extends('layouts.admin')
@section('title')
    Page Ads
@endsection
@section('content')

            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i> Ads   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void(0)" onclick="modads()" class="btn btn-outline-info btn-sm">Add New</a></div>
                            <div class="card-body">
                            @include('includes.errors')
<div class="table-responsive">
            @if (count($allads)>0)
        <table class="table table-striped table-sm" id="faqs">
          <thead>
            <tr>
              <th>#</th>
              <th>Image Position</th>
              <th>Status</th>
              <th>Image</th>
              
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
             <?php $i = 0;?>
            @foreach ($allads as $item)
                <tr>
            <td>{{$i+1}}</td>
                <td class="pos{{$item->id}}">{{$item->position}}</td>
                <td><img src="{{asset($item->file)}}"  class="im{{$item->id}}" width="80px" height="80px"></td>
                 <td>@if ($item->is_activated)
                      <a class="text-danger" href="{{route('isdeactived',['id' => $item->id])}}"  title="deactivate">Deactivate</a>
                 @else
                       <a class="text-primary" href="{{route('isactived',['id' => $item->id])}}"  title="activate">Activate</a>
                 @endif</td>
              <td>
                  <a class="btn btn-info btn-sm" href="javascript:void" onclick="editads('{{$item->id}}')"  title="edit"><i class="fas fa-edit"></i></a>
  <a class="btn btn-danger btn-sm" href="{{route('ads.delete',['id' => $item->id])}}" onclick="return confirm('Are you sure you want to delete this Record')" title="delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <?php  $i++ ?>
            @endforeach          
          </tbody>
        </table>
           @else
       <div class="alert alert-info">No Data Found</div>
       @endif
      </div>

       </div>       
  </div>



 <div class="modal fade" id="ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('ads.add')}}" method="post" enctype="multipart/form-data">
                @csrf
                                
                <div class="form-group">
                      <select class="form-control" name="size">
                        <option selected disabled>Ads Position Size</option>
                         <option value="small">Small Ads (575px by 200px)</option>
                          <option value="big">big Ads (1170px by 400px)</option>
                      </select>
                    </div> 

                 <div class="form-group">
                     <input type="file" class="form-control" name="file" accept=".jpg,.png,.jpeg" >
                    </div>                              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-success">Save</button>
      </div>
        </form>
    </div>
  </div>
</div>


<div class="modal fade" id="upads" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('ads.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                   <input type="text" name="id" class="uid" value="">             
                <div class="form-group">
                      <select class="form-control" name="size"  id="sz">
                        <option selected disabled>Ads Position Size</option>
                         <option value="small">Small Ads (575px by 200px)</option>
                          <option value="big">big Ads (1170px by 400px)</option>
                      </select>
                    </div> 

                 <div class="form-group">
                  <div id="img"></div><br>
                     <input type="file" class="form-control" name="file" accept=".jpg,.png,.jpeg" >
                    </div>                                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-success">Update</button>
      </div>
        </form>
    </div>
  </div>
</div>
@endsection
@section('script')
    <script>
        function modads(){
            $("#ads").modal();
        }    
    
    function editads(id) {
        $("#upads").modal();
        let imgatr = $('.im'+id).attr('src');
        let position = $('.pos'+id).text();
        $(".uid").val(id);
        $("#sz").append('<option value="'+position+'" selected>'+position+'</option>');
        $("#img").html('<img src="'+imgatr+'" id="img" width="80px" height="80px">');

    }
      

     $(document).ready(function(){
       $("#faqs").DataTable();
    });
</script>
@endsection