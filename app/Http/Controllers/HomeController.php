<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Pagesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.home')->with('users',User::where('id',Auth::user()->id)->first())
                                 ->with('categories', Category::with(['subcategories'])->get())
                                 ->with('contpg', Pagesetting::where('caption','contact page')->first());
                                
    }
    //customer account details
    public function userdetails($id)
    { 
        return view('users.user-details')->with('customers',User::findorfail($id))
                                    ->with('categories', Category::with(['subcategories'])->get())
                                 ->with('contpg', Pagesetting::where('caption','contact page')->first());
    }
  

    //update customer details
        public function userdetailsupdate(Request $request,$id)
    {
        $this->validate($request,[
             'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'string'],
            'gender' => ['required', 'string'],
        ]);
        $usersde = User::findorfail($id);

        $usersde->name = $request->name;
        $usersde->email = $request->email;
        $usersde->phone_number = $request->phone_number;
        $usersde->dob = $request->dob;
        $usersde->gender = $request->gender;

        $usersde->save();
               return redirect()->back()->with('success', 'Details  Updated');
    }
 
    //customer addres book
    public function address(){
        return view('users.addressbook')->with('address',User::where('id',Auth::user()->id)->first())
        ->with('categories', Category::with(['subcategories'])->get())
                                 ->with('contpg', Pagesetting::where('caption','contact page')->first())
                                 ->with('categories', Category::with(['subcategories'])->get())
                                 ->with('contpg', Pagesetting::where('caption','contact page')->first());
    }

      //customer address edit
     public function showeditaddress($id)
    {
        return view('users.editaddress')->with('adress',User::findorfail($id))
                                        ->with('categories', Category::with(['subcategories'])->get())
                                        ->with('couns',Country::all())
                                        ->with('contpg', Pagesetting::where('caption','contact page')->first());

    }

    //update address book
     public function customeraddressupdate(Request $request,$id)
    {
        $this->validate($request,[
             'address' => ['required', 'string'],
            'country' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'state' => ['required', 'string'],
            'postal_code' => ['required', 'string','digits:5'],
        ]);
        $users = User::findorfail($id);

        $users->address = $request->address;
        $users->phone_number = $request->phone;
        $users->country = $request->country;
        $users->state = $request->state;
        $users->postal_code = $request->postal_code;

        $users->save();
        
       return redirect()->back()->with('success', 'Address Updated');
    }

    //customer order
    public function customerorder(){
        return view('users.user-order')->with('orders',Order::where('user_id',Auth::user()->id)->get())
                                        ->with('categories', Category::with(['subcategories'])->get())
                                        ->with('contpg', Pagesetting::where('caption','contact page')->first());
    }
//customer order details
    public function customerorderdetails($id){         
        $singleorderdetails = Order::findorfail($id);
        return view('users.order-details')->with('orderdetails', $singleorderdetails)
                                            ->with('categories', Category::with(['subcategories'])->get())
                                            ->with('contpg', Pagesetting::where('caption','contact page')->first());
    }
  //wishlist
    public function wishlistitem(){
        return view('users.wishlist')->with('saveditems',Wishlist::where('user_id',Auth::user()->id)->get())
                                     ->with('categories', Category::with(['subcategories'])->get())
                                 ->with('contpg', Pagesetting::where('caption','contact page')->first());
    }
    
    //delete item from wishlist
public function deleteitem($id){
    $wishlistdelete = Wishlist::findorfail($id);

    $wishlistdelete->delete();
    return redirect()->back()->with('success', 'Item Removed from wishlist');
}  


    //view password page
       public function showpass()
    {
        return view('users.changepassword')->with('categories', Category::with(['subcategories'])->get())
                                      ->with('contpg', Pagesetting::where('caption','contact page')->first());
    }

       public function changepassword(Request $request)
    {
             $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
           User::where('id',$request->id)->update([
              'password' => Hash::make($request->password)
          ]);
       
           return redirect()->route('chpass')->with('success','Password Changed Successfully');
    }

    //generating gift code for user
    public function generatecoupon(){
        $checkcode = Order::where('referal_code',Auth::user()->user_code)->get();
        if ($checkcode->count() == '20') {
            $getcode =  $this->createcoupon('-5%','1');
            return $getcode;         
        }elseif ($checkcode->count() == '40') {
            $getcode2 =  $this->createcoupon('-7%','1');
            return $getcode2;         
        }elseif ($checkcode->count() == '60') {
            $getcode3 =  $this->createcoupon('-9%','1');
            return $getcode3;         
        }elseif ($checkcode->count() == '80') {
            $getcode4 =  $this->createcoupon('-12%','1');
            return $getcode4;         
        }elseif ($checkcode->count() == '90') {
            $getcode5 =  $this->createcoupon('-20%','1');
            return $getcode5;         
        }elseif ($checkcode->count() >= '100') {
            $getcode6 =  $this->createcoupon('-25%','1');
            return $getcode6;         
        }else {
            return false;
        }
        
    }
  //coupon gift for user
    public function createcoupon($discount,$coupontime){
           $getcoupon = Coupon::create([
            'name' => 'gift card',
            'code' => "dmp".mt_rand('000000','999999'),
            'discount' => $discount,
            'coupontime' => $coupontime
        ]);
        $getcode = $getcoupon->code;
            return $getcode;
        
    }
   
}
