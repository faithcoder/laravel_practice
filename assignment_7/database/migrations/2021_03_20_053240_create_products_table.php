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
            $table->string('product_name');
            $table->string('barcode');
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('business_location_id');
            $table->integer('alert_quantity');
            $table->integer('purchase_price');
            $table->integer('other_price');
            $table->integer('selling_price');
            $table->string('picture');
            $table->unsignedBigInteger('vat_group_id');
            $table->string('discount_type');
            $table->string('discount'); //it can coupon code too
            $table->text('product_description');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table){
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('business_location_id')->references('id')->on('business_locations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vat_group_id')->references('id')->on('vat_groups')->onDelete('cascade')->onUpdate('cascade');
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
