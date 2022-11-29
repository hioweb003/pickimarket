@extends('layouts.admin')
@section('title')
Shipping Policy
@endsection
@section('adpagename')
 Shipping Policy
@endsection
@section('admincontent')
<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
     <div class="card my-4">
         <div class="card-header"> <h4>Shipping Policy</h4></div>
         <div class="card-body">
            @include('includes.errors')
            <div class="col-md-12">
                
                <form action="{{route('shippoliy.save')}}" method="post">
                    @csrf
                             <div class="container">
                           
                            <div class="form-group">
                            
                            <textarea name="content" id="content" cols="30" rows="10">@if($shprnd ?? ""){!!$shprnd->content!!}@endif</textarea>
                            </div>
        
                             <div class="form-group">
                                 <button type="submit" class="btn btn-primary">Save Shipping Policy</button>
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
      CKEDITOR.replace('content');
      </script>
@endsection
