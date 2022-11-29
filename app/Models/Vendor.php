<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Vendor extends Authenticatable
{
    use HasFactory, HasApiTokens,Notifiable;
    protected $guard ='store';

    protected $fillable = [
         'referral_code','title','firstname','lastname','email','password','store_name','phone','address','state','city','lga','how','email_verify','roles','store_description','valid_id','status'
    ];

  
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
