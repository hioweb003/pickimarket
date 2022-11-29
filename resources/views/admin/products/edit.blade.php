@extends('layouts.admin')
@section('title')
    Products
@endsection
@section('adpagename')
 Edit Product
@endsection
@section('admincontent')
   
        
        <form action="{{route('admin.product.update',['id' => $editpro->id])}}" method="post" enctype="multipart/form-data">
     @csrf

     <div class="card">
      <div class="card-header">
          Category
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label for="catego">Main Category <sup class="text-danger">*</sup></label>
            <select name="category" class="form-control" id="catego">
              <option selected disabled>Select...</option>
              @foreach ($categories as $category) 
               <option value="{{$category->id}}"
                @if ($category->id == $editpro->category->id)
                selected
            @endif 
            >{{$category->category_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group clid" style="display: none">
              <label for="child_catego">Sub Category <sup class="text-danger">*</sup></label>
            <select name="child_category" class="form-control" id="child_catego">
              <option selected disabled>Select...</option>
              @foreach ($categories->child as $chdcategory)
              <option value="{{$chdcategory->id}}"
                @if ($chdcategory->id == $editpro->child_category)
                    selected
                @endif
                >{{$chdcategory->category_name}}</option>
            @endforeach	
            </select>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
           <div class="form-group">
            <label for="children_catego">Sub Category <sup class="text-danger">*</sup></label>
            <select name="children_category" class="form-control" id="children_catego">
              <option selected disabled>Select...</option>
              @foreach ($categories->children as $chdrencategory)
              <option value="{{$chdrencategory->id}}"
                @if ($chdrencategory->id == $editpro->children_category)
                    selected
                @endif
                >{{$chdrencategory->category_name}}</option>
            @endforeach	
            </select>
           </div>
          </div>
        </div>
      </div>
     </div>


     <div class="row">
                  <!-- col-md-8 start-->
        <div class="col-md-8 mb-4">
          <div class="card">
                <div class="card-header">
                    Edit Product  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.product.index')}}" class="btn btn-outline-info btn-sm">Back</a>
                </div>
              <div class="card-body">
                         @include('includes.errors')

            <input type="hidden" name="admin_id" id="admin_id" class="form-control" value="{{$editpro->admin_id}}">
                            <div class="form-group">
                        <label for="pro_name">Product Name</label>
                            <input type="text" name="pro_name" id="pro_name" class="form-control" value="{{$editpro->pro_name}}">
                    </div>
                           <div class="form-group">
                        <label for="pro_name">Product Brand</label>
                           <input type="text" name="pro_brand" id="pro_brand" class="form-control" value="{{$editpro->pro_brand}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                            {{$editpro->description}}
                            </textarea>
                    </div>
                    
                        <div class="form-group">
                        <label for="price">Regular Price</label>
                        <input type="text" name="regular_price" id="regular_price" class="form-control" placeholder="5000" value="{{$editpro->regular_price}}">
                    </div>

                           <div class="form-group">
                        <label for="sale_price">Discount Price</label>
                        <input type="text" name="discount_price" id="discount_price" class="form-control" placeholder="5000" value="{{$editpro->discount_price}}">
                    </div>
                
                        <div class="form-group">
                        <label for="quantity">Quantity in Stock</label>
                     <input type="text" name="quantity" id="quantity" class="form-control" placeholder="20" value="{{$editpro->quantity}}">
                    </div>

                  
                
                     <div class="form-group">
                        <label for="pro_details">Product Short Description</label>
                      <textarea name="pro_details" id="pro_details" class="form-control">
                            {{$editpro->pro_details}}
                            </textarea>
                    </div>
                   
                    
                 </div><!--card-body end-->
           </div><!-- card end-->
       </div>  <!-- col-md-8 end-->
   <!-- col-md-4 start-->
        <div class="col-md-4">
           <div class="row justify-content-center mt-4 mb-2">
               <button type="submit" class="btn btn-primary" style="align-content:center">Update</button> 
           </div>
         <div class="card col-md-10">
            <div class="card-body">
              <label for="categ">Category</label>
               <div class="border border-1 border-muted p-3 mt-2 mb-4">
                <div class="form-group">
                  <label for="category">Category</label>
                          <select class="form-control" name="category" required id="category">
                                  @foreach ($categories as $section)
                              <option value="{{$section->id}}"
                                @if ($section->id == $editpro->category->id)
                                    selected
                                @endif
                                >{{$section->cate_name}}</option>
                            @endforeach	
                          </select>
                    </div> 
                      <div class="form-group">
                        <label for="scategory">Sub Category</label>
                        <select class="form-control" name="scategory" id="scategory">
                          @foreach ($subcategories as $subcategory)
                          <option value="{{$subcategory->id}}"
                            @if ($subcategory->id == $editpro->subcategory->id)
                                selected
                            @endif
                            >{{$subcategory->name}}</option>
                        @endforeach	
                      </select>  
                      </div>    	
               </div>
                <div class="form-check mb-3">                     
                    <input type="checkbox" name="featured" id="featured" class="form-check-input" value="1" @if($editpro->is_featured == "1") checked @endif>
                      <label class="form-check-label" for="featured">Best of the week</label>
                    </div>
                    <div class="form-check mb-3">                     
                      <input type="checkbox" name="flashsales" id="spoff" class="form-check-input" value="1" @if($editpro->flash_sales == "1") checked @endif>
                        <label class="form-check-label">Flash Sales</label>
                      </div>
                      <div class="form-group" id="shwtimerdate" style="display: {{$editpro->flash_sales == '1' ? 'block' : 'none'}}">
                        <label for="timer">Offer Ends</label>
                        <input type="date" name="timer" class="form-control" id="timer" value="{{$editpro->timer}}">
                      </div>

                <div class="form-group">
                        <label for="featured_image">Featured Image</label>
                 <div><img src="{{asset($editpro->featured_image)}}" width="60px" height="50px" alt=""></div>
                 <img src="" class="passimg" style="display: none" width="60px" height="50px">
                    <input type="file" name="featured_image"  class="form-control pfeatured_image" accept=".jpg,.png,.jpeg">
                </div>

                      <div class="form-group">
                        <label for="images">Product Image Gallery (multiple select allowed)</label>
                        <div>
                              @foreach ($editpro->productimages as $img)
                              <a href="{{route('removeimage',['id' => $img->id])}}" title="remove image" onclick="return confirm('Are you sure you want to remove these image')">
                                <img src="{{asset($img->images)}}" width="60px" height="50px" alt="">
                              </a>
                              @endforeach
                        </div>
                        <div id="gimg"></div>
                    <input type="file" name="images[]" id="images" class="form-control" multiple  accept=".jpg,.png,.jpeg">
                    </div>
            </div>
         </div>
</form>
 
        </div> <!-- col-md-4 end-->
     </div>

     @include('includes.mediamodal')
@endsection

@section('script')
     <script>
      CKEDITOR.replace('description');
      CKEDITOR.replace('pro_details');
      </script>
       <script>
       $(document).ready(function(){
 
          $("#spoff").click(function(){
            if(this.checked){
              $("#shwtimerdate").show();
            }else{
              $("#shwtimerdate").hide();
            }
        });
       
    
        $("#category").change(function(e){
          e.preventDefault();
              let categ = $("#category").val();
              //alert(categ);
                $.ajax({
                  url: "{{route('category.subcategory')}}",
                  method:"post",
                  data:{'_token':'{{csrf_token()}}',categ:categ},
                  
                  success:function(data){
                    //console.log(data);
                    $("#scategory").html(data);
                  },
                  error:function(xhr,status,errorThrown){
                    alert("Error... "+errorThrown);
                  }
                    });
        });
      });
    </script>
@endsection


                                        
                                           


                                             