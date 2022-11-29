<?php

namespace App\Http\Controllers;

use App\Models\Activitylog;
use App\Models\Category;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Customerlog;
use App\Models\Pagesetting;
use App\Models\Shippingcost;
use App\Models\Spending;
use App\Models\Wishlist;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class CartController extends Controller
{   
    
    public function index(){
       
        $cartitem = Cart::content();
        return view('cart.index')->with('cartitems',$cartitem)
                                ->with('contpg', Pagesetting::where('caption','contact page')->first())
                                ->with('categories', Category::with(['subcategories'])->get());
    }

    //add to cart
    public function addcart(){
        // $price = "";
        // $newprice = "";
   
	 $product = Product::findorfail(request()->addtocart);

            $cart = Cart::add(array(
                'id' => $product->id, // inique row ID
                'name' => $product->pro_name,
                'price' => is_null($product->discount_price) ? $product->regular_price : $product->discount_price,
                'qty' => request()->qty ? request()->qty : '1',  
                'weight' => 1,     
                'options' => array(
                  'size' => request()->size,  
                  'img' => $product->featured_image,
                  'store' => $product->store            
                ),
                 
            ))->associate($product);
   // dd(Request()->all()); 'associatedModel' => $product
   Wishlist::where('product_id',$product->id)->delete();
     return redirect()->back()->with('success','Product Added To Cart');
    }
 
    //remove item from cart
    public function remove_item($id){
        Cart::remove($id);
       
             session()->forget('code');
             session()->forget('point');
        return redirect()->back()->with('success','Product Removed From Cart');
    }

    //update cart
     public function update($rowid){   
       $procheck = Product::findorfail(Request()->id);
      // $stock = ProductAttribute::select('stock')->where('product_id',$id)->sum('stock');
       if ($procheck->quantity < Request()->qty) {
           return redirect()->back()->with('error','Sorry! you can only order for '.$procheck->quantity.' quantity');
       }  
       session()->forget('code');
       session()->forget('point');
       Cart::update($rowid,Request()->qty);
     
        return redirect()->back()->with('success','Product quantity Updated');
    }

    //checkout page
    public function checkout(){
         if (Cart::content()->count() == 0) {
           return redirect()->route('cart.index')->with('error','Sorry Your Cart is Empty');
        }
        return view('cart.checkout')->with('users',Auth::user())  
                                      ->with('categories', Category::with(['subcategories'])->get())  
                                     ->with('checkoutcart',Cart::content())
                                     ->with('shipcosts',$this->getshippingcharges(Auth::user()->country))
                                     ->with('contpg', Pagesetting::where('caption','contact page')->first()); 
    }

    public function getshippingcharges($country)
    {
       $shpchar = Shippingcost::where('caption',$country)->first();
         return !empty($shpchar->amount) ? $shpchar->amount : "";
    }

    public function couponcode(Request $request){
      $this->validate($request,[
          'code' => ['required','string']
      ]);
      $coupon = Coupon::where('code',$request->code)->first();
       if (!$coupon) {
           return redirect()->back()->with('error','Sorry!!!...coupon code does not exist');
       }
       $toprice = "0";
       foreach (Cart::content() as $cartitem){
        $toprice += $cartitem->price * $cartitem->qty;
        }
       
      if ($coupon->coupontime > 0) {
        $coupon->decrement('coupontime'); 
       $totaldiscount = ($coupon->discount / 100) * $toprice;
         $discount =  $toprice - (($coupon->discount / 100) * $toprice);
         session()->put('code',[
           'name' => $coupon->name,
           'precentage' => $coupon->discount,
           'discount' =>  $discount,
           'disamount' =>  $totaldiscount
         ]);      
      }else {
         return redirect()->back()->with('error','Sorry!!!...coupon code has expire');
      }
/*

      if (Cart::subtotal() < 5000) {
         return redirect()->back()->with('error','Sorry!!!...coupon code can only be apply to '.number_format('5000').' and above');
      }
*/
 
      return redirect()->back()->with('success','coupon code applied successfully');
    }

    
    //save order after online payment
    public function saveorder($reference,$total,$name,$email,$address,$phone,$country,$state,$discount,$shpcost,$discounttyp){
  
      $order = Order::create([
        'user_id' => Auth::user()->id,
       'order_number' => Str::random(8),
        'status' => 'pending',
       'is_paid' => '1',
       'payment_method' => 'credit card',
       'paymentref' => $reference,
       'item_count' =>  Cart::count(),  //\Cart::getContent()->count(),
       'grand_total' => $total,
       'discount' => $discount,
       'discount_type' => $discounttyp,
       'shipping_cost' => $shpcost,
       'shipping_name' => $name,
       'shipping_email' => $email,
       'shipping_address' => $address,
       'shipping_phone' => $phone,
       'shipping_country' => $country,
       'shipping_state' => $state,     
      ]);
         
      $cartitems = Cart::content();
       
      foreach ($cartitems as $items) {
          $order->items()->attach($items->id,['price' => $items->price, 'quantity' => $items->qty,'pro_attributes' => $items->options->size]);
      }
       $this->decrease_increase_quantity();
    
       Cart::destroy();

      session()->forget('code');
      session()->forget('point');
      $this->sendordermail($email); 
      session()->forget('payload'); 
         
}//pay online

// decrease quantity from product quantity
public function decrease_increase_quantity(){
  $sold = 0;
   foreach (Cart::content() as $items) {
        $proid = Product::findorfail($items->model->id);
        $sold += $items->qty;
        $proid->update([
          'quantity' => $proid->quantity - $items->qty,
          'sold' => $sold
        ]);

   }
}

//check if product quantity is avaliable
public function checkavalability(){
   foreach (Cart::getContent() as $value) {
     $product = Product::findorfail($value->model->id);
      if ($product->quantity < $value->quantity) {
         return true; 
      }
   }
   return false;
}
    //order completed page
    public function ordercompleted(){
       return view('order-complete')->with('categories', Category::with(['subcategories'])->get())
                                  ->with('contpg', Pagesetting::where('caption','contact page')->first()); 
    }
    public function payondelivery(Request $r){
      $order = Order::create([
        'user_id' => Auth::user()->id,
        'order_number' => Str::random(8),
         'status' => 'pending',
        'is_paid' => '0',
        'payment_method' => 'bank transfer/pos',
        'item_count' =>  Cart::count(),  //\Cart::getContent()->count(),
        'grand_total' => $r->amount,
        'discount' => $r->discount,
        'discount_type' => $r->discounttype,
        'shipping_cost' => $r->shpcost,
        'shipping_name' => $r->name,
        'shipping_email' => $r->email,
        'shipping_address' => $r->address,
        'shipping_phone' => $r->phone,
        'shipping_country' => $r->country,
        'shipping_state' => $r->state,     
       ]);
          
       $cartitems = Cart::content();
       
       foreach ($cartitems as $items) {
           $order->items()->attach($items->id,['price' => $items->price, 'quantity' => $items->qty,'pro_attributes' => $items->options->size]);
       }
        $this->decrease_increase_quantity();
     /*  if ($request->payment_method == 'credit card') {
           $cartvals = \Cart::getContent();
           return view('paymentpage')  ->with('cartitems',$cartvals)
                                      ->with('orderid',$order);                                 
        }*/

        Cart::destroy();

       session()->forget('code');
       session()->forget('point');
       $this->sendordermail($r->email);
       session()->forget('payload');
       return redirect()->route('ordcom')->with('success','Order Completed'); 
    }//pay on delivery
    
    //stripe payments 
    public function paymentCallback(Request $r)
    {
      $productname = array();
      Session::put('payload',[
        'name' => $r->name,
        'email' => $r->email,
        'phone' => $r->phone,
        'address' => $r->address,
        'postal_code' => $r->postal_code,
        'amount' =>  $r->amount,
        'state'=> $r->state,
        'country' => $r->country,
        'shpcost' => $r->shpcost,
        'discount' => $r->discount,
        'transid' => $r->transid,
        'discounttyp' => $r->discounttype
    ]);
   
    }

    public function save_details(){
       if(session()->has('payload')){
        $this->saveorder(session()->get('payload')['transid'],session()->get('payload')['amount'],
        session()->get('payload')['name'],session()->get('payload')['email'],session()->get('payload')['address'],
        session()->get('payload')['phone'],session()->get('payload')['country'],session()->get('payload')['state'],
        session()->get('payload')['discount'],session()->get('payload')['shpcost'],session()->get('payload')['discounttyp']);
       }
       return redirect()->route('ordcom')->with('success','Order Completed');
    }

    public function sendordermail($email){
      Mail::send(['html' => 'mails.order'],[
        'msg' => 'Your order has been completed, thanks for your patronage <br><br>'
        ],function($subc)use($email){
        $subc->from('no-reply@trishhair.com','Trish Hair');             
        $subc->to($email);                 
        $subc->subject("Order Completed");
      });
    }

  
}//end class
