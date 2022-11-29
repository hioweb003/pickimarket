@extends('layouts.admin')
@section('title')
    Category
@endsection
@section('adpagename')
 Category
@endsection
@section('admincontent')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Category  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.category.create')}}" class="btn btn-outline-info btn-sm">Add New</a></div>
                            <div class="card-body">
                                @include('includes.success')
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="products">
                                        <thead>
                                            <tr>
                                                 <th>#</th>  
                                                <th>Category Name</th> 
                                                 <th>Slug</th>
                                                 <th>Subcategory</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             <?php $i=0;?>
                                        @foreach ($categories as $category)
                                            <tr>
                                                    <td>{{$i+1}}</td>
                                            <td>{{$category->category_name}} </td>
                                            <td>{{$category->slug}}</td>
                                            <td>
                                              <ul class="list-unstyled">
                                                @foreach ($category->child as $subcategory)
                                                <li class="border-bottom" style="line-height:2">
                                                <a href="{{route('admin.category.edit',['cslug' => $subcategory->slug])}}" title="edit subcategory" class="my-1 text-info">{{ucwords($subcategory->category_name)}} </a>
                                                <a href="{{route('admin.subcategory.delete',['id' => $subcategory->id])}}" class="my-1 text-danger" title="delete subcategory" onclick="return confirm('Are you sure you want to delete subcategory');"><i class="fa fa-times"></i></a>
                                                </li>
                                                @foreach ($subcategory->children as $children)
                                                <li class="border-bottom" style="line-height:2">
                                                    <a href="{{route('admin.category.edit',['cslug' => $children->slug])}}" title="edit subcategory" class="my-1 text-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- {{ucwords($children->category_name)}} </a>
                                                    <a href="{{route('admin.subcd.delete',['id' => $children->id])}}" class="my-1 text-danger" title="delete subcategory" onclick="return confirm('Are you sure you want to delete subcategory');"><i class="fa fa-times"></i></a>
                                                    </li>
                                                @endforeach
                                            @endforeach
                                              </ul>
                                            </td>
                                            
                                            <td><a href="{{route('admin.category.edit',['cslug' => $category->slug])}}" class="text-primary" title="edit"><i class="fa fa-edit"></i></a> <a href="{{route('admin.category.delete',['id' => $category->id])}}" onclick="return confirm('Are you sure you want to delete this record');" class="text-danger" title="delete"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <?php $i++;?>
                                        @endforeach
                                    
                                        </tbody>
                                    </table>
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
