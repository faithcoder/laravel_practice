<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('business_location_id');
            $table->foreignId('purchase_order_id');
            $table->integer('selling_price');
            $table->integer('in_quantity');
            $table->integer('out_quantity');
            $table->integer('current_stock');
            $table->integer('stock_sale_price');
            $table->integer('stock_purchase_price');
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
        Schema::dropIfExists('stocks');
    }
}
