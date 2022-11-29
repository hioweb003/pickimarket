<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Serviceprovider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialLogincontroller extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }

    /**
     * Obtain the user information from facebook,google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($social)
    {   
        try {

            $socialuser = Socialite::driver($social)->user();

        } catch (\Throwable $th) {

            return redirect('/login');
        }
         
        
       // dd($user);
       
           $checkuser = User::where('email',$socialuser->getEmail())->first();
             if ($checkuser) {
                  Auth::loginUsingId($checkuser->id);         
                 return redirect('/home');

             } else {
             $users = User::create([
            'email' => $socialuser->getEmail(),
           'name' =>  $socialuser->getName(),
           'password' => Hash::make(Str::random(16))
           ]);

           $socialprovider = Serviceprovider::where('provider_id',$socialuser->getId())->first();
           if(!$socialprovider){
            Serviceprovider::create([
                'user_id' => $users->id,
                'provider_id' => $socialuser->getId(),
                'provider' => $social
            ]);

           }
     
           Auth::loginUsingId($users->id);
          
          return redirect('/home');
     }

       
    }    
}
