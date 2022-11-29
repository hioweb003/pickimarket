@extends('layouts.admin')
@section('title')
    Category
@endsection
@section('adpagename')
  Edit
@endsection
@section('admincontent')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-edit mr-1"></i>Edit Category  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('admin.category.index')}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    @include('includes.errors')
             <form action="{{route('admin.category.update')}}" method="post">
                                @csrf
                                <div class="form-group">
                                      <label for="cate_name">Category </label>
                                    <input type="text" name="categoryname" class="form-control" placeholder="Enter Category"  id="categoryname" required value="{{$edcate->category_name}}">
                                </div>

                              
                                 <div class="form-group">
                                     <label for="cate_name">Parent Category</label>
                             <select class="form-control" name="parent_category" id="parent_category">
                               <option value="0">Parent Category</option>
                                
                                @foreach ($categories as $cateitem)
                                <option value="{{$cateitem->id}}" {{!empty($edcate) ? ($cateitem->id == $edcate->parent_id ? 'selected' : '') : ''}} style="font-weight:800">{{$cateitem->category_name}}</option>
                                @foreach ($cateitem->child as $child)
                                 <option value="{{$child->id}}" {{!empty($edcate) ? ($child->id == $edcate->parent_id ? 'selected' : '') : ''}} style="font-weight:700">&nbsp;&nbsp;&nbsp;- {{$child->category_name}}</option>
                                 @foreach ($child->children as $children)
                                 <option value="{{$children->id}}" {{!empty($edcate) ? ($children->id == $edcate->parent_id ? 'selected' : '') : ''}} style="font-weight:400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- {{$children->category_name}}</option>
                                 @endforeach
                                @endforeach	 
                             @endforeach
							</select>
                                     </div> 
                                     <input type="hidden" name="cid" value="{{$edcate->id}}">

                                     <div class="form-group">
                                     <button type="submit" class="btn btn-success">Update</button>
                                 </div>                          
     </form>
                                </div>
                            </div>
                        </div>
@endsection

