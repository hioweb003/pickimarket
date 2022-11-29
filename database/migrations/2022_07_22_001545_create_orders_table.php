<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('vendor_id');
            $table->string('order_number');
            $table->string('status');
            $table->string('item_count');
            $table->boolean('is_paid')->default(false);
            $table->string('payment_method');
            $table->string('paymentref')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('shipping_cost')->nullable();
            $table->string('grand_total');
            $table->string('shipping_name');
            $table->string('shipping_email');
            $table->string('shipping_address');
            $table->string('shipping_phone');
            $table->string('shipping_country');
            $table->string('shipping_state');
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
        Schema::dropIfExists('orders');
    }
}
