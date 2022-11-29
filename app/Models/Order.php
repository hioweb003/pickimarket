<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id','vendor_id','order_number','status','item_count','is_paid','payment_method','paymentref','discount','discount_type','grand_total','shipping_cost','shipping_name','shipping_email','shipping_address','shipping_phone','shipping_country','shipping_state'
          ];
      
            public function items(){
             return $this->belongsToMany(Product::class,'order_items','order_id','product_id')->withPivot('store','price','quantity','pro_attributes');
          }
          public function user(){
            return $this->belongsTo(User::class);
          }
          public function vendor(){
            return $this->belongsTo(Vendor::class,'vendor_id');
          }
          public function picki(){
            return $this->belongsTo(Admin::class,'vendor_id');
          }
}
