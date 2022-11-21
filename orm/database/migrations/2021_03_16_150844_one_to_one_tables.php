<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OneToOneTables extends Migration
{
    /**
     * Run the migrations.
         *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
        	$table->id();
        	$table->string('name');
        	$table->timestamps();
    	});

        Schema::create('trade_licenses', function (Blueprint $table) {
        	$table->id();
        	$table->dateTime('issue_date', $precision = 0);
        	$table->unsignedBigInteger('business_id');
        	$table->timestamps();
        });
        
        Schema::table('trade_licenses', function (Blueprint $table) {
        	$table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade')->onUpdate('cascade');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade_licenses');
        Schema::dropIfExists('businesses');
    }
}
