<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Coupon;
use App\Models\Order;
class CouponsController extends Controller
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
        return view('admin.coupons.index')->with('coupons',Coupon::all())->with('orders',Order::where('status','pending')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.coupons.create')->with('orders',Order::where('status','pending')->get());
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
            'name' => ['required','string'],
           'code' => ['required','string'],
           'discount' => ['required','string','max:2'],
           'coupontime' => ['required','string']
        ]);
        Coupon::create([
            'name' => $request->name,
            'code' => $request->code,
            'discount' => $request->discount,
            'coupontime' => $request->coupontime
        ]);

        return redirect()->route('coupon.index')->with('success','Coupon Created Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     $couponedit = Coupon::findorfail($id);
         return view('admin.coupons.edit')->with('edcoupon',$couponedit)->with('orders',Order::where('status','pending')->get());
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
            'name' => ['required','string'],
           'code' => ['required','string'],
           'discount' => ['required','string','max:2'],
           'coupontime' => ['required','string']
        ]);

         $couponupdate = Coupon::findorfail($id);
         $couponupdate->name = $request->name;
         $couponupdate->code = $request->code;
         $couponupdate->discount = $request->discount;
         $couponupdate->coupontime = $request->coupontime;

         $couponupdate->save();
        return redirect()->route('coupon.index')->with('success','Coupon Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $coupondelete = Coupon::findorfail($id);
         $coupondelete->delete();
        return redirect()->route('coupon.index')->with('success','Coupon Deleted Successfully');
    }

    public function sendcoupon(Request $request){
          $this->validate($request, [
            'subject' => ['required', 'string'],
            'message' => ['required','string']
        ]);

         
                  Mail::send(['html' => 'mails.sendmail'],[
                    'msg' => $request->message.'<br><br> Your promo code: '.$request->code
                    ],function($subc)use($request){
                    $subc->from('no-reply@timipayless.com','Timi Payless Service'); 
                    $users = User::all();
                      foreach ($users as $user) {                
                    $subc->to($user->email);   
                      }                 
                    $subc->subject($request->subject);
                  });
                
              return redirect()->back()->with('success','Coupon Sent Successfully');
    }
}
