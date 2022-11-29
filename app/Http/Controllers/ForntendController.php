<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Faq;
use App\Models\Pagesetting;
use App\Models\Review;
use App\Models\Newsletter;
use App\Models\Wishlist;
use App\Models\Booking;
use App\Models\ProductAttribute;
use App\Models\Subcategory;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class ForntendController extends Controller
{
    public function welcomepage(){
       //Session::flush();
        return view('welcome')->with('categories', Category::where('parent_id','0')->get())//category links                       
                             ->with('categ', Category::all())
                             ->with('slides',Slide::where('position','admin')->where('status','1')->orderBy('created_at','DESC')->take(6)->get())                           
                             ->with('bestofweeks',Product::where('is_featured','1')->orderBy('id','DESC')->take(5)->get())//for scrolling products
                             ->with('recents',Product::orderBy('created_at','DESC')->take(4)->get())//for non scrolling products
                            //  ->with('customwigs', Subcategory::with(['categories','products'])->where('name','Custom Made Wig')->take(10)->get())
                            //  ->with('rawbundles', Subcategory::with(['categories','products'])->where('name','Bundle')->take(10)->get())
                            //  ->with('beauties', Subcategory::with(['categories','products'])->where('name','Beauty Accessories')->take(10)->get())
                              ->with('deals',Product::orderBy('id','DESC')->take(4)->get())
                             // ->with('ransmall',Ads::inRandomOrder()->where('is_activated','1')->where('position','small')->take(2)->get())
                              //->with('smallads',Ads::where('is_activated','1')->where('position','small')->orderBy('id','DESC')->take(2)->get())
                              //->with('bigads',Ads::where('is_activated','1')->where('position','big')->orderBy('id','DESC')->take(1)->first())
                              ->with('trending',Product::inRandomOrder()->where('views','>=','20')->take(5)->get())
                              ->with('abtpg', Pagesetting::where('caption','about page')->first())
                              ->with('contpg', Pagesetting::where('caption','contact page')->first()); 
                       
    }

    public function registerwithref($ref){
      session()->put('ref',[
          'refcode' => $ref
      ]);
       return redirect()->route('register');
  }

    // //ajax search result
    public function searchdropdown(Request $request){
         $data = array();
       if($request->ajax()){
             $se = $request->get('search');
           $allprodata = Product::where('pro_name','like','%'.$se.'%')->orWhere('pro_brand','like','%'.$se.'%')->get();

           foreach ($allprodata as $dat) {
                $data[] = '<li class="resl mx-3" id="hv" style="cursor:pointer;font-size:14px">'.$dat->pro_name.'</li>';
           }
           return $data;
       }
    }

  //pages
    public function allstores(){
        return view('stores')->with('allstores', Vendor::all())
                             ->with('categories', Category::with(['subcategories'])->get());
                          
    }

    public function vendors($marchant){
      $vendor =  Vendor::where('store_name',$marchant)->where('status',1)->first();
      if($vendor){
        return view('vendor')->with('ved',$vendor)
                              ->with('allpro',Product::where('store',$vendor->store_name)->get())
                              ->with('categories', Category::with(['subcategories'])->get());
      }else{
        return view('vendor')->with('vederr','Merchant not found')
                           ->with('categories', Category::with(['subcategories'])->get());
      }
                     
  }
    public function about(){
        return view('about-us')->with('abtpg', Pagesetting::where('caption','about page')->first())
                             ->with('categories', Category::with(['subcategories'])->get())
                           ->with('contpg', Pagesetting::where('caption','contact page')->first())
                           ->with('vis', Pagesetting::where('caption','vision')->first())
                           ->with('his', Pagesetting::where('caption','history')->first()); 
    }

    public function pgcontact(){
        return view('contact-us')->with('categories', Category::with(['subcategories'])->get())
                                  ->with('allstores', Vendor::take(4)->get())
                               ->with('contpg', Pagesetting::where('caption','contact page')->first());  
    }

    public function terms(){
        return view('terms')->with('trm', Pagesetting::where('caption','terms')->first())
                                ->with('contpg', Pagesetting::where('caption','contact page')->first());  
    }


     public function faq(){
        return view('faq')->with('contpg', Pagesetting::where('caption','contact page')->first())
                          ->with('categories', Category::with(['subcategories'])->get())
                         ->with('faqs',Faq::orderBy('id','DESC')->get());
    }

      public function privacy_policy(){
        return view('privacy')->with('pripg', Pagesetting::where('caption','privacy')->first());  
    }

    public function ship_policy(){
        return view('shipping-policy')->with('shprnd', Pagesetting::where('caption','shippolicy')->first());  
    }
    public function delivryw_policy(){
        return view('delivery-policy')->with('delivp', Pagesetting::where('caption','delivery')->first());  
    }
    public function return_policy(){
        return view('return-policy')->with('retp', Pagesetting::where('caption','refund')->first());  
    }

  //brands
  public function brand_output($slug){
        $allbrandpro = Product::where('product_brand', $slug)->paginate(12);

        return view('product-brands')->with('brandpro',$allbrandpro)
                                  ->with('procate',Category::all())
                                  ->with('bdn',$slug)
                                ->with('brands', Product::select('pro_brand')->groupBy('pro_brand')->get())
                                   ->with('abtpg', Pagesetting::where('caption','about page')->first())
                                    ->with('categories', Category::with(['subcategories'])->get())
                           ->with('contpg', Pagesetting::where('caption','contact page')->first());
  }
// //subcategory page
// public function subcategory($slug){//get all products from a single category
        
//     //   //$categoryproduct = Category::with(['products'])->where()->paginate(20);
//     $subcatepg =  Subcategory::where('slug',$slug)->first();
//     $subcatepro = Product::where('subcategory_id', $subcatepg->id)->paginate(12);
// return view('product-category')
//                           ->with('subcats',$subcatepg)
//                           ->with('subcatepro',$subcatepro)
//                           ->with('procate',Category::all())
//                            ->with('brands', Product::select('pro_brand')->groupBy('pro_brand')->get())
//                             ->with('categories', Category::with(['subcategories'])->get())
//                           ->with('abtpg', Pagesetting::where('caption','about page')->first())
//                       ->with('contpg', Pagesetting::where('caption','contact page')->first());  //all products from a single category
// }

// category pages
  public function category_output($slug){//get all products from a single category
        
       //$categoryproduct = Category::with(['products'])->where()->paginate(20);
         $catepg =  Category::where('url',$slug)->first();
         $allcatepro = Product::where('category_id', $catepg->id)->paginate(12);
        
    return view('product-category')
                               ->with('cats',$catepg)
                               ->with('catepro',$allcatepro)
                               ->with('procate',Category::all())
                                ->with('brands', Product::select('product_brand')->groupBy('product_brand')->get())
                                 ->with('categories', Category::with(['subcategories'])->get())
                               ->with('abtpg', Pagesetting::where('caption','about page')->first())
                           ->with('contpg', Pagesetting::where('caption','contact page')->first());  //all products from a single category
   }

// //special offer page
public function flash_sale(){
   
    return view('flash-sale')->with('relatedflashes',Product::where('flash_sales','1')->orderBy('created_at','ASC')->take(4)->get())
                              ->with('flashes',Product::where('flash_sales','1')->orderBy('created_at','DESC')->take(1)->get())
                              ->with('abtpg', Pagesetting::where('caption','about page')->first())
                              ->with('categories', Category::with(['subcategories'])->get())
                             ->with('contpg', Pagesetting::where('caption','contact page')->first());;
}


public function get_product_productattribute($id){
      $data = array();
      $data2 = array();
      $products = Product::where('id',$id)->first();
      $productattribute = ProductAttribute::select('size')->where('product_id',$products->id)->groupBy('size')->get();
       if(count($productattribute)>0){

        $data = '<div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="product-details-view-content">
                                        <div class="product-info">
                                            <h2>'.$products->pro_name.'</h2>
                                            <span class="product-details-ref">Brand: '.$products->pro_brand.'</span><br>
                                            <span class="product-details-ref">Store: '.$products->store.'</span>
                              </div>
                        </div>
                     </div>
        </div>';
     
              $data .= '<div class="product-variants mt-4">
                                                <div class="produt-variants-size" style="width:100%!important">
                                                <div class="form-group">
                                                    <label class="font-weight-bold text-dark">Attribute</label>
                                                    <select class="form-control w-100" name="size">
                                                    <option value="1" title="S" selected="selected">Select Size</option>';
                                                     foreach ($productattribute as $value) {
                                                     $data .= '
                                                        <option value="'.$value->size.'">'.$value->size.'</option>';
                                                             
                                                          }                                          
                                           $data .= '</select>
                                           </div>
                                                </div>
                                            </div>';   

                 return $data;
      }
           $data2 = '<div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="product-details-view-content">
                                        <div class="product-info">
                                            <h2>'.$products->pro_name.'</h2>
                                            <span class="product-details-ref">Brand: '.$products->pro_brand.'</span><br>
                                            <span class="product-details-ref">Store: '.$products->store.'</span>
                              </div>
                        </div>
                     </div>
        </div>';
         return $data2;
      
      
}

//product details page
public function product_details($slug){
       $products = Product::where('slug',$slug)->first();
       $products->increment('views');
       $related = Product::where('id','!=',$products->id)
                         ->where('category_id',$products->category_id)
                         ->orWhere('subcategory_id',$products->subcategory_id)->get();

       $productattribute = ProductAttribute::select('size')->where('product_id',$products->id)->groupBy('size')->get();
     //  $stock = ProductAttribute::select('stock')->where('product_id',$products->id)->sum('stock');
       
    return view('single-product')->with('prodetails',$products)
                                ->with('related',$related)
                                 ->with('attributes',$productattribute)//for non scrolling products 
                                 ->with('categories', Category::with(['subcategories'])->get())
                                 ->with('abtpg', Pagesetting::where('caption','about page')->first())
                           ->with('contpg', Pagesetting::where('caption','contact page')->first());  
                                 
}

// //all products
public function allproducts(){ 
     
    return view('shop')->with('all',Product::orderBy('created_at','DESC')->paginate(12))
                              ->with('proattrs',ProductAttribute::all())
                              ->with('procate',Category::all())
                              ->with('categories', Category::with(['subcategories'])->get())
                              ->with('brands', Product::select('product_brand')->groupBy('product_brand')->get())
                              ->with('abtpg', Pagesetting::where('caption','about page')->first())
                           ->with('contpg', Pagesetting::where('caption','contact page')->first());  
}

//product reviews
public function store_reviews(Request $request){
    $this->validate($request,[
      'name'=> ['required','string'],
      'email' => ['required','string','email'],
      'product_review' => ['required','string'],
      'ratings' => ['required']
    ]);

    Review::create([
        'product_id' => $request->product_id,
        'name' => $request->name,
        'email' => $request->email,
        'product_review' => $request->product_review,
        'ratings' => $request->ratings
    ]);

    return redirect()->back()->with('success', 'Product review saved');
}

//newsletter
public function newsletter(Request $request){
    $this->validate($request,[
      'email' => ['required','string','email'],    
    ]);

    // Newsletter::create([
    //     'email' => $request->email
    // ]);

     Mail::send(['html'=>'mails.sendmail'],[
        'msg' => 'Welcome to Picki Market Newsletter, enjoy great offers and deals for the best price you can get'
        ],function($newsmail)use($request){
           $newsmail->from('no-reply@pickimarket.com','Picki Market');
           $newsmail->to($request->email);
           $newsmail->subject('Picki Market Newsletter');
        });
        return redirect()->back()->with('success', 'You have successfully subcribed to Trishhair Newsletter');
}


    public function sendcontactmail(Request $request){
        $this->validate($request,[
           'name' => ['required','string'],
           'email' => ['required','string','email'],
           'message' => ['required','string'],
        ]);

            Mail::send(['html'=>'mails.sendmail'],[
        'msg' => $request->message
        ],function($contactmail)use($request){
           $contactmail->from($request->email,$request->name);
           $contactmail->to('support@pickimarket.com');
           $contactmail->subject('New Contact Message');
        });

        return back()->with('success', 'Thank You for Contacting Us');
    }

   
}//end class
