<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $fillable =[
        'product_id','size','color','regular_price','discount_price'
     ];
 
     public function product(){
         return $this->belongsTo(Product::class,'product_id');
     }
}
