@extends('layouts.admin')
@section('title')
    Broadcast message
@endsection
@section('adpagename')
  Message
@endsection
@section('admincontent')
<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Send Broadcast Message  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{URL::previous()}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                <div class="col-md-8">
                                    @include('includes.errors')
                            <form action="{{route('send.msg')}}" method="post" enctype="multipart/form-data">
                                @csrf 

                                @foreach ($allemail as $mail)
                            <input type="hidden" name="email[]" id="email" class="form-control" value="{{$mail->email}}">     
                                @endforeach
                                        <div class="form-group">
                                          <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject">     
                                        </div>  
                                        <div class="form-check my-3">
                                            <input class="form-check-input" type="checkbox" name="include_users"  value="includeusers" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Include Registered Customers
                                            </label>
                                          </div>

                                       <div class="form-group">
                                           <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                     </div>
                                     <div class="form-group">
                                         <label for="file">Attach an Image</label>
                                       <input type="file" name="images[]" class="form-control" id="file" multiple accept=".jpg,.png,.jpeg,.svg">
                                  </div>  
                                                                          
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success">Send Message</button>
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
      CKEDITOR.replace('message');
      </script>

@endsection