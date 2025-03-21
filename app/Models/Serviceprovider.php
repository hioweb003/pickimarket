<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviceprovider extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','provider_id','provider'
       ];
   
       public function user(){
           return $this->belongsTo('App\Model\User','user_id');
       }
}
