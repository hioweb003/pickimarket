<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
class CategoriesController extends Controller
{
      public function __construct()
      {
        $this->middleware('auth:admin');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $category = Category::where('parent_id','0')->get();
        // dd($category);
        return view('admin.categories.index')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.categories.create')->with('categories',Category::where('parent_id','0')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *  
     */
    //'subcategory1' => ['required','string'],
        // 'subcategory2' => ['required']
    public function store(Request $request)
    {
       $this->validate($request,[
         'categoryname' => ['required','string'],
       ]);
       
        Category::create([
            'category_name' => $request->categoryname,
            'slug' => Str::slug($request->categoryname),
            'parent_id' => $request->parent_category,
        ]);
      
        return redirect()->back()->with('success', 'Category Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$category = Category::findorfail($id);
       // return view('admin.categories.show')->with('categories',$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cslug)
    {      
       
        $categoryedit = Category::where('slug',$cslug)->first();
        return view('admin.categories.edit')->with('categories',Category::where('parent_id','0')->get())
                                            ->with('edcate', $categoryedit);
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'categoryname' => ['required','string'],
          ]);
      
            Category::findorfail($request->cid)->update([
                'category_name' => $request->categoryname,
            'slug' => Str::slug($request->categoryname),
            'parent_id' => $request->parent_category,
            ]);
        
       return redirect()->route('admin.category.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findorfail($id);
        $category->delete();
        $subc = Category::where('parent_id',$id)->first();
        if(!empty($subc)){
          $subc->delete();
          Category::where('parent_id',$subc->id)->delete();
        }
       
         return redirect()->route('admin.category.index')->with('success', 'Category  Deleted');

    }

    public function delete_category_child($id){
        
           $sc = Category::findorfail($id);
           Category::where('parent_id',$id)->delete();
           $sc->delete();
         //$category->subcategories()->delete();
         return redirect()->route('admin.category.index')->with('success', 'Subcategory Deleted');
    }

    public function delete_category_children($id){
        
           $sc = Category::findorfail($id);
           Category::where('parent_id',$id)->delete();
           $sc->delete();
         //$category->subcategories()->delete();
         return redirect()->route('admin.category.index')->with('success', 'Subcategory Deleted');
    }
}
