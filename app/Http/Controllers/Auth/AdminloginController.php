<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminloginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin')->except('adminlogout');
    }

    //show admin login page
    public function showadminlogin(){
        return view('auth.admin_login');
    
    }

    //login into admin page 
    public function adminlogin(Request $request){
       $check = $this->validate($request,[
            'username' => 'required',
            'password' => 'required'
        ]);
        $request->session()->regenerateToken();
      if (Auth::guard('admin')->attempt(['username'=>$request->username, 'password'=>$request->password])) {
          return redirect()->intended(route('admin.dashboard'));
      }
      return redirect()->back()->withInput($request->only('username'))->with('info','username or password does not exist');

    }
    public function adminlogout(Request $r){
        Auth::guard('admin')->logout();
        $r->session()->invalidate();
        return redirect()->route('show.login');
    }
}
