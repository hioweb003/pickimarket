<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard ='admin';
    
    protected $fillable = [
       'name','username', 'password','store','roles'
    ];
    
     public function products(){
        return $this->hasMany('App\Models\Products');
    }
}
