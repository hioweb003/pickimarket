@extends('layouts.admin')
@section('title')
    Category
@endsection
@section('adpagename')
 Create
@endsection
@section('admincontent')
   
            <div class="card mb-4 mt-4">
            <div class="card-header"><i class="fa fa-pencil mr-1"></i>Create Category  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('admin.category.index')}}" class="btn btn-outline-info btn-sm">Back</a></div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    @include('includes.errors')
                                    @include('includes.success')
             <form action="{{route('admin.category.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                      <label for="cate_name">Category </label>
                                    <input type="text" name="categoryname" placeholder="Enter Category"  class="form-control" id="categoryname" required value="{{old('categoryname')}}">
                                </div>
                                {{-- <div class="form-group">
                                     <label for="cate_name">Category Section</label>
                                     <select name="section" id="section"  class="form-control">
                                        <option selected disabled>Select...</option> 
                                        @foreach ($sections as $section)
                                               <option value="{{$section->id}}">{{$section->Subcate1}}</option> 
                                        @endforeach
                                     </select>
                                </div> --}}
                                 <div class="form-group">
                                     <label for="cate_name">Parent Category</label>
                             <select class="form-control" name="parent_category" id="parent_category">
                               <option value="0">Parent Category</option>
                                @foreach ($categories as $cateitem)
                                    <option value="{{$cateitem->id}}" style="font-weight:800">{{$cateitem->category_name}}</option>
                                    @foreach ($cateitem->child as $child)
                                     <option value="{{$child->id}}" style="font-weight:700">&nbsp;&nbsp;&nbsp;- {{$child->category_name}}</option>
                                     @foreach ($child->children as $children)
                                     <option value="{{$children->id}}" style="font-weight:400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- {{$children->category_name}}</option>
                                     @endforeach
                                    @endforeach	 
                                 @endforeach
							</select>
                                     </div> 

                                     <div class="form-group">
                                     <button type="submit" class="btn btn-success">Save</button>
                                 </div>                          
     </form>
                                </div>
                            </div>
                        </div>
@endsection

