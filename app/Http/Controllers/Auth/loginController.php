<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pagesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
  

    //show admin login page
    public function showuserlogin(){
        return view('auth.login'); 
    }

    //login into admin page 
    public function login(Request $request){
       $check = $this->validate($request,[
            'email' => ['required', 'string','email'],
            'password' => ['required', 'string', 'min:8']
        ]);
        $request->session()->regenerateToken();
      if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
          return redirect()->intended(route('home'));
      }
      return redirect()->back()->withInput($request->only('email'))->with('error','Email or password does not match');

    }
    public function logout(){
        Auth::guard('web')->logout();
        request()->session()->invalidate();
        return redirect("/");
    }
}
