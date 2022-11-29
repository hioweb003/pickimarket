<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\support\Str;
use App\Models\Admin;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Country;
use App\Models\User;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Order;
use App\Models\Newsletter;
use App\Models\Shippingcost;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Session;
class AdminController extends Controller
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
    {    $products = Product::where('store',Auth::guard('admin')->user()->store)->get();
        return view('admin.dashboard')->with('users',User::all())
                                      ->with('admins',Admin::all())
                                      ->with('procate',Category::all())
                                      ->with('products',$products)
                                      ->with('allproducts',Product::all())
                                      ->with('orders',Order::where('status','pending')->get());
    }

    public function profile()
    {
         return view('admin.userprofile');
    }

    public function profile_update(Request $request)
    {
      $this->validate($request,[
        'username' => ['required','string'],
    ]);

    Admin::findorfail($request->uid)->update([
        'name' => $request->name,
        'username' => $request->username,
    ]);
      return redirect()->route('admin.user')->with('success','Account Updated Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.createuser');
    }

    public function managestore()
    {
         return view('admin.managestore')->with('vendors',Vendor::OrderBy('created_at','DESC')->get());
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
            'username' => ['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Admin::create([
            'name' => $request->name,
            'username' => $request->username,
           'password' => Hash::make($request->password),
           'roles' => '0'
        ]);
          return redirect()->route('admin.user')->with('success','New Account Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $remove = Admin::findorfail($id);
        $remove->delete();
          return redirect()->route('admin.user')->with('success','Account Deleted Successfully');
    }
   //make admin user permissions
 public function make_admin($id){
       Admin::where('id',$id)->update([
        'roles' => '1'
       ]);
       

        return redirect()->route('admin.user')->with('success','Permission Changed Successfully');
    }

        //remove admin userpermissions
    public function not_admin($id){
        Admin::where('id',$id)->update([
            'roles' => '0'
           ]);

        return redirect()->route('admin.user')->with('success','Permission Changed Successfully');
    }

 

    //all trish admin users
    public function adminuser(){
      // $admin = Auth::guard('admin')->user()->all();
      return view('admin.users')->with('adusers', Admin::all())->with('orders',Order::where('status','pending')->get());
        
    }
    //change password view
public function changepassword(){
   return view('admin.changepassword')->with('orders',Order::where('status','pending')->get());
}
//manage customers
public function managecustomers(){
  return view('admin.managecustomers')->with('users',User::all())->with('orders',Order::where('status','pending')->get());
}

//shippingcost
public function shippingcost_page(){
    return view('admin.shippingcost')->with('couns',Country::all())
                                    ->with('shpcosts',Shippingcost::all());
}

//store shipping cost 
public function store_shipping_cost(Request $r){
   $this->validate($r,[
      'country.*' => ['required','string'],
      'amount.*' => ['required','string','numeric']
   ]);
 foreach($r->country as $key => $value){
  Shippingcost::create([
    'caption' => $value,
    'amount' => $r->amount[$key]
  ]);
 }

   return redirect()->route('shp.shipcost')->with('success','Data Saved');
}
//store shipping cost 
public function update_shipping_cost(Request $r){
  $this->validate($r,[
     'amount' => ['required','string','numeric']
  ]);

  Shippingcost::where('id',$r->id)->update([
    'amount' => $r->amount
  ]);

  return redirect()->route('shp.shipcost')->with('success','Data Updated');
}



//change password
 public function change_pass(Request $request){
           $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
           Admin::where('id',$request->id)->update([
              'password' => Hash::make($request->password)
          ]);
       
           return redirect()->route('password.change')->with('success','Password Changed Successfully');
        }

        //newsletter 
        public function managenewsletter(){
            return view('admin.newsletter')->with('adnews',Newsletter::all()); 
        }
        public function deletenewsletter($id){
              $subcribedel = Newsletter::findorfail($id);
              $subcribedel->delete();

              return redirect()->route('news')->with('success','Subcriber Deleted Successfully');
        }
        //show send broadcast message
        public function showbroadcast(){
           
            return view('admin.sendbroadcast')->with('allemail', Newsletter::all())->with('orders',Order::where('status','pending')->get());
        }


public function sendbroadcastsuers($subject,$data){
      Mail::send(['html' => 'mails.broadcastmail'],
      $data,
      function($subc)use($subject){
        $subc->from('no-reply@pickimarket.com','Picki Market'); 
        $users = User::all();
          foreach ($users as $user) {                
        $subc->to($user->email);   
          }                 
        $subc->subject($subject);
      });
}

              //faq
         public function faqpage(){
      return view('admin.faq.index')->with('faqlist',Faq::all())
                                    ->with('orders',Order::where('status','pending')->get());                               
    }
    public function addfaq(Request $request){
        $this->validate($request,[
         'name' => ['required','string'],        
         'body' => ['required','string'],
       ]);
          
       $posts = Faq::create([           
           'name' => $request->name,
           'body' => $request->body,  
           'faqid' => Str::random(5),
       ]);

       return redirect()->route('admin.faq')->with('success', 'Record created Successfully');
        }

        public function faqedit($id){
          return view('admin.faq.edit')->with('orders',Order::where('status','pending')->get())
                                      ->with('edfq',Faq::findorfail($id));
                                          
        }

           //update faq
            public function faqupdate(Request $request,$id){
                 $this->validate($request,[
         'name' => ['required','string'],
         'body' => ['required','string'],
      
       ]);

           $fq = Faq::findorfail($id); 
        
           $fq->name = $request->name;
           $fq->body = $request->body;
          
           $fq->save();
       return redirect()->route('admin.faq')->with('success', 'Record Updated Successfully');
            }
            
            //delete service
            public function faqdelete($id){

                  $faqdel = Faq::findorfail($id); 
        $faqdel->delete();
        //Comment::where('post_id',$posts->id)->delete();
         return redirect()->route('admin.faq')->with('success', 'Record Deleted Successfully');

            }

            //ads
    public function index_ads(){
      return view('admin.ads.index')->with('orders',Order::where('status','pending')->get());                               
    }

    public function add_new_ads(Request $request){
         $this->validate($request,[
             'size' => ['required'],
             'file' => ['required','image', 'mimes:jpg,jpeg,png']
         ]);
        $ads = $request->file('file');
        $newadspath = time()."_".$ads->getClientOriginalName();
        $ads->move('fileupload',$newadspath);

         Ads::create([
             'position' => $request->size,
             'file' => 'fileupload/'.$newadspath
         ]);
         return redirect()->back()->with('success','Added');
    }

     //activate ads
     public function activate($id){
       $actiads = Ads::findorfail($id);
        $actiads->is_active = '1';
        $actiads->save();

        return redirect()->back()->with('success','Ads Activated');
    }

        //Deactivate ads
    public function disactivate($id){
       $deads = Ads::findorfail($id);
         $deads->is_active = '0';
        $deads->save();

        return redirect()->back()->with('success','Ads Deactivated');
    }

    public function update_ads(Request $request){
       $this->validate($request,[
             'size' => ['required'],           
         ]);

         $upads = Ads::findorfail($request->id);
          if ($request->hasFile('file')) {
            $imagePath = $request->file('file');
                         $imageNewName = time()."_".$imagePath->getClientOriginalName();
                          $imagePath->move('fileupload', $imageNewName);
                  $upads->file = 'fileupload/'.$imageNewName;
       }

               $upads->position = $request->size;
                $upads->save();
         return redirect()->back()->with('success','Updated');
    }

    public function deleteads($id){
      $delads = Ads::findorfail($id);
       if (file_exists($delads->file)) {
           unlink($delads->file);
       }
       $delads->delete();
       return redirect()->back()->with('success','Ads Deleted');
    }

    public function senduserbroadcast(Request $request){
        $this->validate($request, [
            'subject' => ['required', 'string'],
            'message' => ['required','string']
        ]);

         
                  Mail::send(['html' => 'mails.sendmail'],[
                    'msg' => $request->message
                    ],function($subc)use($request){
                    $subc->from('no-reply@pickimarket.com','Picki Market'); 
                    $users = User::all();
                      foreach ($users as $user) {                
                    $subc->to($user->email);   
                      }                 
                    $subc->subject($request->subject);
                  });
                
              return redirect()->back()->with('success','Broadcast Message Sent Successfully');
    }

    public function getordercount(){
      $getorder = array();
      $getorder[] = Order::where('status','pending')->count();
    
      return $getorder;
    }
    

    

}//endclass
