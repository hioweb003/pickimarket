<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Str;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\Image;
use App\Models\ProductAttribute;
use App\Models\Productimage;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
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
        $product = Product::orderBy('created_at','DESC')->get();
        return view('admin.products.index')
                                           ->with('products',$product);
                                           
    }

    public function storecate(Request $request){
       dd($request->all());
       $this->validate($request,[
         'categoryname' => ['required','string'],
          'parent_category' => ['required']
       ]);
    
       Category::create([
           'cate_name' => $request->categoryname,
           'position_id' => $request->parent_category,
           'subcategoryone_id' => $request->section,
           'url' => Str::slug($request->categoryname),
           'source' => 'admin'
       ]);
       return true;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
      ;
      //dd( $category);
        return view('admin.products.create')
                                           ->with('categories',Category::where('parent_id','0')->get())
                                           ->with('subcategory', Category::all())
                                           ->with('orders',Order::where('status','pending')->get());
                               
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
         'product_name' => ['required','string'],
         'product_brand' => ['required','string'],
         'product_weight' => ['required','string'],
         'product_description' => ['required'],
         'regular_price.*' => ['required','numeric'],
         'discount_price.*' => ['required','numeric'],
         'quantity' => ['required'],
         'category' => 'required',
         'return_policy' => 'required',
         'product_condition' => 'required',
         'featured_image' => ['required','image','mimes:jpeg,jpg,bmp,png'],     
       ]);
    
       $product = Product::create([
          'sku' => Str::random(5),
          'admin_id' => $request->admin_id,
          'vendor_id' => $request->vendor_id,
          'store' => $request->store,          
          'category_id' => $request->category,
          'child_category' => $request->child_category,
          'children_category' => $request->children_category,
          'pro_name' => $request->pro_name,
          'pro_brand' => $request->product_brand,
          'product_weight' => $request->product_weight,
          'slug' => str::slug($request->product_name),
          'description' => $request->product_description,
          'pro_details' => $request->product_short_description,
          'regular_price' => $request->regular_price,
          'discount_price' => $request->discount_price,
          'quantity' => $request->quantity,
          'is_featured' => $request->featured ? $request->featured : '0',
          'flash_sales' => $request->flashsales ? $request->flashsales : '0',
          'timer' => $request->flashsales ? $request->timer : Null,   
          'featured_image' => $request->featured_image,
          'warranty' => $request->warranty,
          'warranty_details' => $request->warranty_details,
          'return_policy' => $request->return_policy,
          'product_condition' => $request->product_condition,
          'delivery_rate' => $request->delivery_rate,
       ]);
            //product image gallery
             foreach ($request->images  as $valueimage) {
              Productimage::create([
                 'product_id' => $product->id,
                 'images' => $valueimage
              ]);          
          }
          
          foreach ($request->size as $key => $value) {
            ProductAttribute::create([
               'product_id' => $product->id,       
               'size' => $value,
               'color' => $request->color[$key],
               'regular_price' => $request->regular_price[$key],
               'discount_price' => $request->discount_price[$key],
             ]);
           }
      
         return redirect()->route('admin.product.index')->with('success', 'Product Added Successfully');
                                                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         /* $productshow = Product::findorfail($id);
        return view('admin.products.show')
                                           ->with('showpro', $productshow)
                                            ->with('variations', product_variation::all())
                                             ->with('subcategories', subcategoryone::all())
                                             ->with('subcategories2', subcategorytwo::all())
                                             ->with('galleries', gallery_image::where('product_id', $productshow->id)->get());*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        //$category = Subcategory::with(['categories'])->get();
        $productedit = Product::findorfail($id);
        return view('admin.products.edit')->with('categories',Category::all())
                                         ->with('editpro', $productedit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
         'pro_name' => ['required','string'],
         'pro_brand' => ['required','string'],
         'product_description' => ['required'],
         'regular_price.*' => ['required','numeric'],
         'regular_price.*' => ['required','numeric'],
         'quantity' => ['required'],
         'category' => 'required',
         'return_policy' => 'required',
         'product_condition' => 'required',
       ]);

      $productupdate = Product::findorfail($id);
               //single image
        if ($request->hasFile('featured_image')) {
             $updateimagePath = $request->file('featured_image');
          $updateimageNewName = time().$updateimagePath->getClientOriginalName();
            $updateimagePath->move('uploads', $updateimageNewName);
            $productupdate->featured_image = 'uploads/'.$updateimageNewName;
        }
         //product image gallery
        if ($request->hasFile('images')) {
                   $imagegallery = $request->file('images');
            foreach ($imagegallery  as $valueimage) {            
               $imagegalleryNewName = time()."_".$valueimage->getClientOriginalName();
                $valueimage->move('uploads', $imagegalleryNewName);
                //$arr[] = 'uploads/'.$imagegalleryNewName;
                Productimage::create([
                  'product_id' => $id,
                  'images' => 'uploads/'.$imagegalleryNewName
               ]);          
            }
            
             }

       /*if ($request->has('attribute')) {
             $attrs = explode("|",$request->attribute);
       foreach ($attrs as $value) {
          $attributes[] = $value;
       }
      }*/
          $productupdate->admin_id = $request->admin_id;
          $productupdate->category_id = $request->category;
          $productupdate->pro_name = $request->pro_name;
          $productupdate->pro_brand = $request->pro_brand;
          $productupdate->slug = str::slug($request->pro_name);
          $productupdate->description = $request->description;
          $productupdate->pro_details = $request->pro_details;
          $productupdate->regular_price = $request->regular_price;
          $productupdate->discount_price = $request->discount_price; 
          $productupdate->quantity = $request->quantity;
          $productupdate->is_featured = $request->featured ? $request->featured : '0';
          $productupdate->flash_sales = $request->flashsales ? $request->flashsales : '0';
          $productupdate->timer = $request->flashsales ? $request->timer : Null;  
         $productupdate->save();

       

         return redirect()->route('admin.product.index')->with('success', 'Product Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $productdelete = Product::findorfail($id);
       if (file_exists($productdelete->featured_image)) {
           unlink($productdelete->featured_image);
        }
     
         $arrs =  Productimage::where('product_id',$id)->get();
            foreach ($arrs as $value) {
             if (file_exists($value->images)) {
                 unlink($value->images);
             }
        }
        Productimage::where('product_id',$id)->delete();
          $productdelete->delete();
          ProductAttribute::where('product_id',$id)->delete();
         return redirect()->route('product.index')->with('success', 'Product Deleted Successfully');
    }

    //attribute
    public function showarttribute($id){
       $prodid = Product::findorfail($id);
      return view('admin.products.attribute')->with('attrs',$prodid)
                                              ->with('orders',Order::where('status','pending')->get())
                                                ->with('allattr',ProductAttribute::where('product_id',$id)->orderBy('id','DESC')->get());
    }

    public function add_product_attribute(Request $request){
      foreach ($request->size as $value) {
       ProductAttribute::create([
          'product_id' => $request->proid,
          'sku' => Str::random(4),        
          'size' => $value,
        ]);
      }

      return redirect()->route('product.index')->with('success', 'Product Attributes Added');
        
    }

    public function update_product_attribute(Request $request){
       ProductAttribute::findorfail($request->id)->update([                 
          'size' => $request->size,
        ]);

          return redirect()->back()->with('success', 'Product Attributes updated');
    }

   public function delarttribute($id){
       ProductAttribute::findorfail($id)->delete();

      return redirect()->back()->with('success', 'Product Attributes Deleted');
    }

   //get subcategory
    public function getchildsubcategory(Request $r){
      $getsubcategory = "";
      if($r->ajax()){
        $getsubcates = Category::where('parent_id',$r->categ)->get();
        $getsubcategory .= "<option selected disabled>Select...</option>";
        foreach($getsubcates as $getsubcat){
         $getsubcategory .= "<option value=".$getsubcat->id.">".$getsubcat->category_name."</option>";
        }
        return $getsubcategory;
      }
      
    }

    public function getchildrensubcategory(Request $r){
      $getchrensubcategory = "";
      if($r->ajax()){
        $getchrnsubcates = Category::where('parent_id',$r->categid)->get();
        $getchrensubcategory .= "<option selected value='0'>Select...</option>";
        foreach($getchrnsubcates as $getsubcat){
         $getchrensubcategory .= "<option value=".$getsubcat->id.">".$getsubcat->category_name."</option>";
        }
        return $getchrensubcategory;
      }

    }

    //get image by store name
    public function get_intended_store_image(){
      $gurd = Auth::guard('admin') ? 'pickimarket' : Auth::guard('store')->user()->store_name;
      $ims = array();
      $iomags = Image::where('store',$gurd)->orderBy('created_at','DESC')->get();
      $a=0;
      
      foreach($iomags as $imgs){
        $b = $a+1;
        $ims[] = '<div class="col-lg-3 col-md-4 col-sm-6">
        <div class="form-check">
          <div class="contain">
            <input class="form-check-input defaultChec" type="checkbox"  name="imgceckbox[]" value="'.$imgs->filename.'"  data-id="'.$imgs->id.'" autocomplete="off"  id="defaultCheck1'.$b.'">
            <label class="form-check-label" style="cursor: pointer" for="defaultCheck1'.$b.'">
              <img src="'.asset($imgs->filename).'" class="img-thumbnail img-fluid" width="200px" height="200px" alt="">
            </label>
            <i class="fa fa-check-circle ck" id="chk'.$b.'"></i>
          </div>
        </div>
      </div>';
      $a++;
      }
      
      return $ims;
    }

    public function add_proimges(Request $r){
      $this->validate($r,[
        'file.*' => ['required','image','mimes:jpg,png,jpeg','max:2048']
      ]);
      
      $gurd = Auth::guard('admin') ? 'pickimarket' : Auth::guard('store')->user()->store_name;
      
        $imagegallery = $r->file('file');
        foreach ($imagegallery  as $valueimage) {            
        $imagegalleryNewName = time()."_".$valueimage->getClientOriginalName();
         $valueimage->move('productimages', $imagegalleryNewName);
         //$arr[] = 'uploads/'.$imagegalleryNewName; 
          Image::create([
            'store' => $gurd,
            'filename' => 'productimages/'.$imagegalleryNewName
         ]);          
     }
    
     return response()->json(['data' => 'success']);
      //return redirect()->back()->with('success','Image Removed');
  }

    public function remove_proimges(Request $r){
      foreach($r->imgceckbox as $imid){
        $delimgs = Image::where('filename',$imid)->first();
        if(file_exists($imid)){
            unlink($imid);
        }
        $delimgs->delete();
      }
      return '1';
  }

}
