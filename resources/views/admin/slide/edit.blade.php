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
            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Slide  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{URL::previous()}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    @include('includes.errors')
                            <form action="{{route('admin.slide.update',['id' => $slides->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                 
                                      <div class="form-group">
                                          <label for="image">Image</label>
                                           <div>
                                               <?php
                               $arrayOfFiles = explode(',',$slides->image); 
                               ?>
                                   @foreach ($arrayOfFiles  as $arrimg)
                                        <img src="{{asset($arrimg)}}" width="60px" height="50px" alt="">
                                    @endforeach
                                           </div><br>
                                 <input type="file" name="image" id="image" class="form-control" accept=".jpg,.jpeg,.png" multiple>
                                     </div> 
                                     <div class="form-group">
                                        <label for="image">Image Content (Optional)</label>
                                        <textarea name="content" class="form-control" cols="30" rows="3">{{$slides->content}}</textarea>
                                     </div>
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Update</button>
                                 </div>                          
                            </form>
                                </div>
                            </div>
                        </div>
      </div>
  </div>
</div>
@endsection

