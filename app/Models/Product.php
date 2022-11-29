<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'sku','admin_id','vendor_id','store','category_id','child_category','children_category','pro_name','pro_brand','product_weight','views','sold','slug','description','quantity','pro_details','regular_price','discount_price','featured_image','is_featured','warranty','warranty_details','return_policy','product_condition','delivery_rate','flash_sales','timer','status'
     ];

     public function category(){
        return $this->belongsTo(Category::class);
     }
     public function child(){
        return $this->belongsTo(Category::class,'child_category');
     }
     public function children(){
        return $this->belongsTo(Category::class,'children_category');
     }

     public function attributes(){
        return $this->hasMany(ProductAttribute::class,'product_id');
     }

     public function productimages(){
      return $this->hasMany(Productimage::class);
   }
   
     public function reviews(){
        return $this->hasMany(Review::class);
     }
     public function admin(){
        return $this->belongsTo(Admin::class,'admin_id');
     }
     public function vendor(){
        return $this->belongsTo(Vendor::class,'vendor_id');
     }

}
