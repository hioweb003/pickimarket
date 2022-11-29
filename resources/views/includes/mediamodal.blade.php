<div class="modal fade show" id="mediamodal" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-sm"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size: 24px">×</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="upload-tab" data-toggle="tab" data-target="#upload" type="button" role="tab" aria-controls="home" aria-selected="true">Upload Images</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="media-tab" data-toggle="tab" data-target="#medialib" type="button" role="tab" aria-controls="profile" aria-selected="false">Media Library</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
              <div class="my-2">
                <form action="{{route('addimage')}}"  class="dropzone dz-message" id="mydropzone" method="post" enctype="multipart/form-data">
                  @csrf
              </form> 
              </div>
              {{-- <div class="row justify-content-center my-2">
                <button type="button" class="btn btn-info rounded-2" title="click to upload" id="uploadfiles">Upload</button>
              </div> --}}
            </div>
            <div class="tab-pane fade show active" id="medialib" role="tabpanel" aria-labelledby="media-tab">
              <div class="float-right my-2">
                <img src="{{asset('images/ajax-loader.gif')}}" class="mdiaimg" style="display: none"  alt="Loading...">
              </div>
              
              <form action="{{route('removeimage')}}" id="removeig" method="post">
                @csrf
                <div class="row my-3 w-100" id="getimg" style="overflow-y: scroll;overflow-x: hidden;height:300px"></div>
              </form>
            </div>
          </div>
           
       </div>
       <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-danger btn-sm" id="deleteimg">Delete Permanetly</button>
          <button type="button" class="btn btn-success pati btn-sm" id="getimages"></button>
      </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>