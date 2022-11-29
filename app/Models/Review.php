<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id','name','email','product_review','ratings'
    ];

    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
