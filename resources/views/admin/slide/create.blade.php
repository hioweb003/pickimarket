@extends('layouts.admin')
@section('title')
   Slides Page
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
            <div class="card-header"><i class="fas fa-table mr-1"></i>Create Slide  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{URL::previous()}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    @include('includes.errors')
                            <form action="{{route('admin.slide.store')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                      <div class="form-group">
                                          <label for="image">Images</label>
                                          <input type="file" name="image[]" id="image" class="form-control" accept=".jpg,.png,.jpeg" multiple>
                                     </div> 
                                     <div class="form-group">
                                        <label for="image">Image Content (Optional)</label>
                                        <textarea name="content" class="form-control" cols="30" rows="3">{{old('content')}}</textarea>
                                     </div>
                                     <input type="hidden" name="sto" id="sto" class="form-control" value="admin">
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Add New</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
    </div>
  </div>
</div>
@endsection

