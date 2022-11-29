@extends('layouts.admin')
@section('title')
    Faq
@endsection
@section('content')


            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Faq  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{URL::previous()}}" class="btn btn-outline-info btn-sm">Back</a></div>
                <div class="card-body">
                    <div class="col-7">
                           <form action="{{route('faq.update',['id' => $edfq->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                                
                <div class="form-group">
                                  <label for="title">Name</label>
                                <input type="text" name="name" id="title" class="form-control"  value="{{$edfq->name}}">
                                </div>
                     
                     <div class="form-group">
                    <textarea name="body" id="" cols="30" class="form-control" placeholder="Enter message" rows="10">{{$edfq->body}}</textarea>
                    </div>
                  
       <div class="form-group">
          <a href="{{route('admin.faq')}}" class="btn btn-secondary">Cancel</a>
         <button type="submit" class="btn btn-success">Update Record</button>
    </div>
        </form>
                    </div>
                </div>
            </div>
@endsection
@section('script')
  <script>
          CKEDITOR.replace('body');
      </script>
@endsection