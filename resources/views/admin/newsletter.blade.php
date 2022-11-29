@extends('layouts.admin')
@section('title')
    Subcribers
@endsection
@section('adpagename')
  Newsleter
@endsection
@section('admincontent')
<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Subcribers  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('showbcast')}}" class="btn btn-outline-info btn-sm">Send Broadcast Message</a></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                   @if(count($adnews)>0)
                                    <table class="table table-bordered" id="newsleter">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             @foreach ($adnews as $news)
                                                 <tr>
                                            <td>{{$news->email}}                                   
                                                </td>
                                            
                                            <td>
                                            <span> <a href="{{route('news.delete',['id' => $news->id])}}" onclick = "return confirm('Are you sure you want to trash this subcriber');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></span>                                     
                                            </td>
                                            </tr>  
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
       $("#newsleter").DataTable();
    });
</script>
@endsection
