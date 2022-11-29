<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Pagesetting;
use App\Models\User;
use App\Models\Order;
class PagesettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

public function bio(){
     return view('admin.about')->with('abt',Pagesetting::where('caption','about page')->first());
                                          
 }
 public function contactpg(){
  return view('admin.contact')->with('cont',Pagesetting::where('caption','contact page')->first());
 }
 public function refundpg(){
  return view('admin.return_policy')->with('rfp', Pagesetting::where('caption','refund')->first());
 }

 public function deliverypg(){
  return view('admin.delivery_policy')->with('dpy', Pagesetting::where('caption','delivery')->first());
 }

 public function termpg(){
     return view('admin.term_service')->with('trm', Pagesetting::where('caption','term_service')->first());
    }
    
public function privacypg(){
     return view('admin.privacy_policy')->with('prv', Pagesetting::where('caption','privacy')->first());
     }

 public function shippolicypg(){
     return view('admin.ship-policy')->with('shprnd', Pagesetting::where('caption','shippolicy')->first());
    }
 
 public function visionpg(){
     return view('admin.vision')->with('vis', Pagesetting::where('caption','vision')->first());
    }

    


 public function contact_save(Request $r){
     $caption2 = "contact page";
     if (!empty($r->savecontact)) {
          $checkcont = Pagesetting::where('caption','contact page')->first();
          if (empty($checkcont)) {                
             Pagesetting::create([
              'caption' => $caption2,
               'email' => $r->email,
               'phone' => $r->phone,
               'address' => $r->address,
               'location' => $r->location
          ]);
          } else {
             Pagesetting::where('caption','contact page')->update([
              'caption' => $caption2,
               'email' => $r->email,
               'phone' => $r->phone,
               'address' => $r->address,
               'location' => $r->location
          ]);
          }
           return redirect()->back()->with('success', 'Data Saved');

      }
}

public function save_bio(Request $r){
     $caption1 = "about page";
     if (!empty($r->saveabout)) {
          $checkabt = Pagesetting::where('caption','about page')->first();
          if (empty($checkabt)) {
               Pagesetting::create([
             'caption' => $caption1,
              'content' => $r->content
         ]);
          } else {
               Pagesetting::where('caption','about page')->update([
             'caption' => $caption1,
              'content' => $r->content
         ]);
          }
          
         return redirect()->back()->with('success', 'Data Saved');

     }
}

//refund policy
public function save_refund(Request $r){
     $caption3 = "refund";  
     if (!empty($r->content)) {
          $checksto = Pagesetting::where('caption','refund')->first();
          if (empty($checksto)) {
               Pagesetting::create([
             'caption' => $caption3,
              'content' => $r->content
         ]);
          } else {
               Pagesetting::where('caption','refund')->update([
             'caption' => $caption3,
              'content' => $r->content
         ]);
          }
          
         return redirect()->back()->with('success', 'Data Saved');

     }
}

//shipping policy
public function save_ship_policy(Request $r){
     $caption4 = "shippolicy";  
     if (!empty($r->content)) {
          $checksto = Pagesetting::where('caption','shippolicy')->first();
          if (empty($checksto)) {
               Pagesetting::create([
             'caption' => $caption4,
              'content' => $r->content
         ]);
          } else {
               Pagesetting::where('caption','shippolicy')->update([
             'caption' => $caption4,
              'content' => $r->content
         ]);
          }
          
         return redirect()->back()->with('success', 'Data Saved');

     }
}

//vision statement
public function save_vision(Request $r){
     $caption5 = "vision";  
     if (!empty($r->content)) {
          $checksto = Pagesetting::where('caption','vision')->first();
          if (empty($checksto)) {
               Pagesetting::create([
             'caption' => $caption5,
              'content' => $r->content
         ]);
          } else {
               Pagesetting::where('caption','vision')->update([
             'caption' => $caption5,
              'content' => $r->content
         ]);
          }
          
         return redirect()->back()->with('success', 'Data Saved');

     }
}

public function save_privacy(Request $r){
     $caption7 = "privacy";  
     if (!empty($r->content)) {
          $checksto = Pagesetting::where('caption','privacy')->first();
          if (empty($checksto)) {
               Pagesetting::create([
             'caption' => $caption7,
              'content' => $r->content
         ]);
          } else {
               Pagesetting::where('caption','privacy')->update([
             'caption' => $caption7,
              'content' => $r->content
         ]);
          }
          
         return redirect()->back()->with('success', 'Data Saved');

     }
}
//mission statement
public function save_terms(Request $r){
     $caption6 = "term_service";  
     if (!empty($r->content)) {
          $checksto = Pagesetting::where('caption','term_service')->first();
          if (empty($checksto)) {
               Pagesetting::create([
             'caption' => $caption6,
              'content' => $r->content
         ]);
          } else {
               Pagesetting::where('caption','term_service')->update([
             'caption' => $caption6,
              'content' => $r->content
         ]);
          }
          
         return redirect()->back()->with('success', 'Data Saved');

     }
}

public function save_delivery(Request $r){
     $caption8 = "delivery";  
     if (!empty($r->content)) {
          $checksto = Pagesetting::where('caption','delivery')->first();
          if (empty($checksto)) {
               Pagesetting::create([
             'caption' => $caption8,
              'content' => $r->content
         ]);
          } else {
               Pagesetting::where('caption','delivery')->update([
             'caption' => $caption8,
              'content' => $r->content
         ]);
          }
          
         return redirect()->back()->with('success', 'Data Saved');

     }
}


}//end class