@extends('layouts.admin')
@section('title')
    Products
@endsection
@section('adpagename')
 Create Product
@endsection
@section('admincontent')
        
        <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data" onsubmit="thisForm()">
     @csrf
     <div class="card">
      <div class="card-header">
          Category
      </div>
      <div class="card-body">
        @include('includes.errors')
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <label for="catego">Main Category <sup class="text-danger">*</sup></label>
            <select name="category" class="form-control" id="catego" autocomplete="off">
              <option selected disabled>Select...</option>
              @foreach ($categories as $category) 
               <option value="{{$category->id}}">{{$category->category_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-group clid" style="display: none">
              <label for="child_catego">Sub Category <sup class="text-danger">*</sup></label>
            <select name="child_category" class="form-control" id="child_catego">
              <option selected disabled>Select...</option>
            </select>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
           <div class="form-group chren" style="display: none">
            <label for="children_catego">Sub Category <sup class="text-danger">*</sup></label>
            <select name="children_category" class="form-control" id="children_catego" onchange="if(this.value != '0'){document.getElementById('prodetals').style.display='block'}else{document.getElementById('prodetals').style.display='none'}">
              
            </select>
           </div>
          </div>
         
        </div>
        <div class="float-right">
          <img src="{{asset('images/ajax-loader.gif')}}" class="limg" style="display: none"  alt="Loading...">
        </div>
      </div>
     </div>
     <div id="prodetals" style="display: none">
      <div class="row">
        <!-- col-md-8 start-->
<div class="col-md-8 col-lg-8 col-sm-12 mb-4">
<div class="card">
      <div class="card-header">
         Product Details
      </div>
      
    <div class="card-body">
  <input type="hidden" name="admin_id" id="admin_id" class="form-control" value="{{Auth::guard('admin')->user()->id}}">
  <input type="hidden" name="store" id="astor" class="form-control" value="{{Auth::guard('admin') ? 'pickimarket' : Auth::guard('store')->user()->store_name}}">
 
                  <div class="form-group">
              <label for="pro_name">Product Name <sup class="text-danger">*</sup></label>
          <input type="text" name="product_name" id="pro_name" class="form-control" required value="{{old('pro_name')}}" autofocus>
          </div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                   <div class="form-group">
              <label for="pro_name">Product Brand <sup class="text-danger">*</sup> (Do not enter product name here)</label>
          <input type="text" name="product_brand" id="pro_brand" class="form-control" required value="{{old('pro_brand')}}">
          </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                   <div class="form-group">
              <label for="pro_name">Product weight(kg) <sup class="text-danger">*</sup></label>
          <input type="number" name="product_weight" id="pro_we" class="form-control" required value="{{old('pro_brand')}}">
          </div>
                </div>
              </div>

          <div class="form-group">
              <label for="description">Product Description <sup class="text-danger">*</sup></label>
              <textarea name="product_description" id="description" class="form-control" required cols="30" rows="10">
                  {{old('product_description')}}
                  </textarea>
          </div>

           <div class="form-group">
              <label for="pro_details">Product Short Description <sup class="text-danger">*</sup> (Hint: input product highlight / features in bullets Not more than 200 charater)</label>
            <textarea name="product_short_description" id="product_details" class="form-control" required>
                  {{old('product_short_description')}}
                  </textarea>
          </div>
          <div class="row my-5">
            <div class="col-md-8 col-lg-8 col-sm-12">
              
          <div class="form-group">
            <label for="warranty">Warranty Options</label>
            <select name="warranty" class="form-control" id="warranty" autocomplete="off" onchange="if(this.value != 'no'){document.getElementById('wrnty').style.display='block'}else{document.getElementById('wrnty').style.display='none'}">
              <option selected disabled>Select warranty</option>
              <option value="no">No</option>
              <option value="yes">Yes</option>
            </select>
        </div>
        <div class="form-group" id="wrnty" style="display: none">
          <textarea name="warranty_details"  rows="2" cols="5" placeholder="Enter Warranty Details..." class="form-control my-2">
          {{old('warranty_details')}}
          </textarea>
      </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
              <div class="form-group">
                <label for="warranty">Return Policy</label>
                <select name="return_policy" class="form-control" required id="return_policy" autocomplete="off">
                  <option selected disabled>Select return policy </option>
                  <option value="7 days">7 Days</option>
                </select>
            </div>
            </div>
          </div>

        <div class="my-2">
          <h6 class="my-3">Product Options  <small>(Add Multiple variant of this item if you have in stock)</small></h6>
         <div class="table-responsive">
          <table class="table-bordered table" id="">
            <thead>
                <tr>                                 
                    <th>Size</th>
                     <th>Color</th>
                     <th>Quantity</th>
                     <th>Regular Price</th>
                     <th>Selling Price</th>
                     <th></th>
                   
                </tr>
            </thead>
            <tbody id="tbod">
              <tr>
                <td><input type='text' required name='size[]' placeholder='size' class='form-control'></td>
                <td><input type='text' name='color[]' id='color' class='form-control' placeholder='red' required></td>
                <td><input type='number' name='quantity[]' id='quantity' class='form-control' placeholder='30' required></td>
                <td><input type='number' name='regular_price[]' id='regular_price' class='form-control' placeholder='3000' required value=''></td>
                <td><input type='number' name='discount_price[]' id='discount_price' class='form-control' placeholder='3000' required value=''></td>
              </tr>
            </tbody>
        </table>
         </div>
      <input type="button" class="px-4 btn btn-primary btn-sm" id="add" value="Add More">
        </div>
       
            
         <div class="row mt-3">
              <div class="form-group col-md-6 col-lg-6 col-sm-12">
                  <label for="weight">Product Condition</label>
                  <select name="product_condition" required class="form-control" id="procond" autocomplete="off">
                    <option selected disabled>Select...</option>
                    <option value="New">New</option>
                    <option value="Fairly Used">Fairly Used</option>
                  </select>
            </div>
            <div class="form-group col-md-6 col-lg-6 col-sm-12">
              <label>Product Delivery Price (<a href="javascript:void(0)">See delivery rate</a>)</label>
               <input type="number" name="delivery_rate" class="form-control" required id="drate" placeholder="Enter Delivery Charge">
            </div>
         </div>
     
                                     
       </div><!--card-body end-->
 </div><!-- card end-->
</div>  <!-- col-md-9 end-->
<!-- col-md-3 start-->
<div class="col-md-4 col-lg-4 col-sm-12">
<div class="card col-md-12 col-lg-12 col-sm-12">
  <div class="card-body">
    
       <div class="form-check mb-3">                     
          <input type="checkbox" name="recommed" id="recommed" class="form-check-input" autocomplete="off" value="1">
            <label class="form-check-label" for="recommed">Recommened For You</label>
          </div>
       <div class="form-check mb-3">                     
          <input type="checkbox" name="featured" id="featured" class="form-check-input" autocomplete="off" value="1">
            <label class="form-check-label" for="featured">Featured Product</label>
          </div>
          <div class="form-check mb-3">                     
            <input type="checkbox" name="flashsales" id="spoff" class="form-check-input" autocomplete="off" value="1">
              <label class="form-check-label" for="flashsales">Flash Sales</label>
            </div>
            <div class="form-group" id="shwtimerdate" style="display: none">
              <label for="timer">Offer Ends</label>
              <input type="date" name="timer" class="form-control" id="timer">
            </div> 
  </div>
</div>
<div class="card my-2">
<div class="card-header">Featured Image</div>
<div class="card-body">
<img src="" class="passimg img-fluid img-thumbnail text-center" style="display: none" width="100" height="100">
<input type="hidden" name="featured_image" autocomplete="off"  required class="form-control pfeatured_image">
<p class="text-primary text-underline adim" style="cursor: pointer" onclick="addproimg('Add Product Image','Set Product Image','set')">Set Product Image</p>  
<p class="text-primary text-underline rmi" style="cursor: pointer;display:none" onclick="removeimage()">Remove Product Image</p>  
</div>
</div>

<div class="card my-2">
<div class="card-header">Product Gallery</div>
<div class="card-body">
<div id="gimg" class="row w-100 mb-3"></div>
<p class="text-primary text-underline" style="cursor: pointer" onclick="addproimg('Add Product Gallery Image','Add Product To Gallery','add')">Add Product Gallery Images</p>  
</div>
</div>


</div> <!-- col-md-4 end-->
</div>
     </div>
      
    </form>
@include('includes.mediamodal')
@endsection

@section('script')
     <script>
      CKEDITOR.replace('description');
      CKEDITOR.replace('pro_details',{
        height: '150'
      });
      </script>
<script>
  function addproimg(ch,st,s){
   $("#mediamodal").modal();
   $(".modal-title").text(ch);
   $(".pati").text(st);
   $(".pati").attr('data-id',s);
   getuploadedimg();
  }

  function removeimage(){
    $(".passimg").hide();
    $(".pfeatured_image").val("");
    $(".adim").show();
    $(".rmi").hide();
  }

  
  $(document).ready(function(){

    $("#spoff").click(function(){
        if(this.checked){
          $("#shwtimerdate").show();
        }else{
          $("#shwtimerdate").hide();
        }
    });

    $("#catego").change(function(e){
      e.preventDefault();
					let categ = $("#catego").val();
          //alert(categ);
          $(".limg").show();
						$.ajax({
							url: "{{route('admin.category.subcategory')}}",
							method:"post",
							data:{'_token':'{{csrf_token()}}',categ:categ},
							
							success:function(data){
								//console.log(data);
								$("#child_catego").html(data);
                $(".clid").show();
                $(".limg").hide();
							},
							error:function(xhr,status,errorThrown){
								alert("Error... "+errorThrown);
                $(".limg").hide();
							}
			        	});
    });
    //child category
    $("#child_catego").change(function(e){
      e.preventDefault();
					let categid = $("#child_catego").val();
          //alert(categ);
          $(".limg").show();
						$.ajax({
							url: "{{route('admin.category.subchilrencategory')}}",
							method:"post",
							data:{'_token':'{{csrf_token()}}',categid:categid},
							
							success:function(data){
								//console.log(data);
								$("#children_catego").html(data);
                $(".chren").show();
                $(".limg").hide();
							},
							error:function(xhr,status,errorThrown){
								alert("Error... "+errorThrown);
                $(".limg").hide();
							}
			        	});
    });

    
  });
</script>
@endsection


                                        
                                           


                                             