@extends('layouts.admin')
@section('title')
   Shipping cost
@endsection
@section('adpagename')
  Shipping Cost
@endsection
@section('admincontent')
<!-- Main-body start -->
<div class="main-body">
  <div class="page-wrapper">
      <!-- Page-body start -->
      <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i> Shipping cost  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void(0)" onclick="modshp()" class="btn btn-outline-info btn-sm">Set Shipping Cost</a></div>
                  <div class="card-body">
                  @include('includes.errors')
      <div class="table-responsive">
            @if (count($shpcosts)>0)
        <table class="table table-striped table-sm" id="shps">
          <thead>
            <tr>
              <th>#</th>
              <th>Country</th>
              <th>Amount</th>
              
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
             <?php $i = 0;
           
            ?>
            @foreach ($shpcosts as $item)
                <tr>
            <td>{{$i+1}}</td>
                <td>{{$item->caption}}</td>
                <td>{{'$'.number_format($item->amount)}}</td>
               
              <td>
               <a class="btn btn-info btn-sm" href="javascript:void(0)" onclick="editship('{{$item->id}}','{{$item->amount}}','{{$item->caption}}')" title="edit"><i class="fas fa-edit"></i></a>
            </td>
            </tr>
            <?php  $i++; ?>
            @endforeach          
          </tbody>
        </table>
           @else
       <div class="alert alert-info">No Data Found</div>
       @endif
      </div>

       </div>       
  </div>



      <div class="modal fade" id="nwshp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('shp.store')}}" method="post">
                      @csrf
                      <table class="table table-bordered table-sm">
                        <thead>
                          <th>country</th>
                          <th>Amount</th>
                          <th>
                            <button type="button" class="btn btn-info btn-sm" title="click to add new" id="addclrecord">Add New Record</button> 
                            </th>
                          </thead>
                        <tbody id="clbody">
                        </tbody>
                      </table>                
                                          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
              </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="edshp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('shp.update')}}" method="post">
                        @csrf
                      <h4 class="conty"></h4>
                            <div class="form-group">
                                <input type="text" name="amount" id="edamount" class="form-control" placeholder="Enter Amount">
                            </div>
                            <input type="hidden" name="id" id="uid" value="">                    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Save</button>
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
        function modshp(){
            $("#nwshp").modal();
        }    
  function editship(id,amount,cntry){
   $("#edshp").modal();
   $("#edamount").val(amount);
   $("#uid").val(id);
   $(".conty").text(cntry);
  }
    
     $(document).ready(function(){
       $("#shps").DataTable({pageLength:'50'});

       $("#addclrecord").click(function(){
  $("#savebtn").show();
  let exp = new Date().getTime();
  let country ="<select name='country[]' class='form-control col-lg-12 col-md-12 col-xs-12' required><option selected disabled>Select A country</option>@foreach ($couns as $coun)<option value='{{$coun->name}}'>{{$coun->name}}</option>@endforeach</select>";
  let html = '<tr id="cltdrow'+exp+'"><td>'+country+'</td>\
  <td align="left"><input type="text" name="amount[]" required placeholder="Amount" class="form-control col-lg-12 col-md-12 col-xs-12"></td>\
  <td align="center"><span class="cldeltrow'+exp+' text-danger font-weight-bold" style="cursor:pointer;"  title="remove row"><i class="fas fa-trash"></i></span></td></tr>';

$("#clbody").append(html);
 
$(".cldeltrow"+exp).click(function(){
   if(confirm('Remove these row')){
    $("#cltdrow"+exp).remove();
   }
});
});
    
    });
</script>
@endsection