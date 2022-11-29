@extends('layouts.admin')
@section('title')
    Products
@endsection
@section('adpagename')
  Products
@endsection
@section('admincontent')
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Products  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.product.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if(count($products)>0)
                                    <table class="table table-bordered table-sm" id="products">
                                        <thead>
                                            <tr>
                                                <th>#</th> 
                                                <th>Image</th> 
                                                <th>Product</th>
                                                <th>Slug</th>
                                                <th>Brand</th>
                                                <th>Regular Price</th>
                                                <th>Discount Price</th>
                                                <th>Category</th>
                                                <th>Qty</th>
                                                <th>Qty Sold</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             <?php $i=0;?>
                                        @foreach ($products as $item)
                                                <tr>
                                                     <td>{{$i+1}}</td>
                                                     <td><img src="{{asset($item->featured_image)}}" width="60px" height="60px" alt="image"></td> 
                                                <td>{{$item->pro_name}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{$item->pro_brand}}</td>
                                             <td>{{'$'.number_format($item->regular_price)}}</td>
                                                <td>{{'$'.number_format($item->discount_price)}}</td>
                                                 <td>                                              
                                               {{$item->category->cate_name}}                                            
                                                </td>
                                              <td>{{$item->quantity}}</td>
                                            <td>{{$item->sold}}</td>
                                            <td>
                                       <a href="{{route('admin.shproduct.attr',["id" => $item->id ])}}" class="text-info" title="Product Attributes"><i class="fas fa-plus"></i></a>&nbsp;  <a href="{{route('admin.product.edit',["id" => $item->id ])}}" class="text-primary" title="Edit Product"><i class="fas fa-edit"></i></a>&nbsp;  
                                            <a href="{{route('admin.product.delete',["id" => $item->id ])}}" onclick = "return confirm('Are you sure you want to trash this product');" class="text-danger" title="Delete Product"><i class="fas fa-trash"></i></a>
                                            </td>                                          
                                            </tr>
                                              <?php $i++;?>
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
       $("#products").DataTable();
    });
</script>
@endsection
