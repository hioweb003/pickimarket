<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->nullable();
            $table->foreignId('admin_id')->nullable();
            $table->foreignId('vendor_id')->nullable();
            $table->string('store')->nullable();
            $table->foreignId('category_id');        
            $table->foreignId('child_category')->nullable();        
            $table->foreignId('children_category')->nullable();        
            $table->string('product_name');
            $table->string('product_brand');
            $table->string('product_weight')->nullable();
            $table->string('views')->default(0);
            $table->boolean('is_featured')->default(0);
            $table->boolean('flash_sales')->default(0);
            $table->string('timer')->nullable();
            $table->string('slug');
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->longText('pro_details')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('featured_image')->nullable(); 
            $table->string('warranty')->nullable(); 
            $table->text('warranty_details')->nullable(); 
            $table->string('return_policy')->nullable();
	        $table->string('product_condition')->nullable(); 
	        $table->string('delivery_rate')->nullable(); 
             $table->boolean('status')->default(0);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
