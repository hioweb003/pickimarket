<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

   public function register(){
       return view('auth.register'); 
   }
   
    protected function create(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string','min:8'],
        ]);

        //  Mail::send(['html' => 'mails.sendmail'],[
        //     'msg' => 'Dear '.$request['firstname'].' '.$request['lastname'].'<br><br> Welcome to Picki Market - your one stop shop for great products and offers.'
        // ], function($mail) use($request){
        //       $mail->from('no-reply@Pickimarket.com','Picki Market');
        //       $mail->to($request['email']);
        //       $mail->subject('PickiMarket Account Registration');
        // });
        $user =  User::create([
            'firstname' => $request['firstname'],
             'lastname' => $request['lastname'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'password' => Hash::make($request['password'])
        ]);
       
       return redirect()->route('login')->with('success','Registered success, Please Login to your account');
    }

    //forget password 
    public function forget_password_page(){
        return view('auth.forgetpassword');
        //->with('contpg', Pagesetting::where('caption','contact page')->first());
      }
  
    public function check_user_email(Request $r){
        $this->validate($r,[
            'email' => ['required','string','email']
        ]);
         $check = User::where('email',$r->email)->first();
         if($check){
             $random = Str::random(8);
             User::findorfail($check->id)->update([
                 'password_token' => $random
             ]);
          $url = '<a href="'.route('resetpass',['token' => $random]).'" style="background-color:#27465C;color:#fff;border-radius:10px;align-text:center;padding:4px 8px;">Reset Password</a>';
            Mail::send(['html' => 'mail.sendmail'],[
                'msg' => "Hi ".$check->name."<br>To reset a new password for your account, click the link below <br><br>".$url
            ], function($mail) use($r){
                  $mail->from('no-reply@pickimarket.com', 'Picki Market');
                  $mail->to($r->email);
                  $mail->subject('Reset Password Request');
            });   
            return redirect()->back()->with('success','Password reset link has been sent to these '.$r->email);
         }else{
             return redirect()->back()->with('error','Sorry Account with these '.$r->email.' does not exist');
         }
    }

    //reset password
    public function reset_password_page($token){
        $check = User::where('password_token',$token)->first();
        if($check){
        return view('auth.resetpassword')->with('userid',$check->id);
        }else{
            return redirect()->route('welcome')->with('error','Session has Expired');
        }
      }
      
    public function reset_password(Request $r){
        $this->validate($r, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
           User::where('id',$r->id)->update([
              'password' => Hash::make($r->password),
              'password_token' => Null
          ]);
          return redirect()->back()->with('success','Password Reset Successfull');
    }
}
