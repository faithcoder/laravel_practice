<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('business_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('city');
            $table->string('zip');
            $table->string('country');
            $table->timestamps();
        });

        Schema::create('customers_group', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('amount');
            $table->unsignedInteger('customer_id');
            $table->timestamps();
        });

        Schema::table('customers_group', function (Blueprint $table){
            $table->foreignId('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table){
            $table->dropForeign(['customer_id']);
        });
        Schema::dropIfExists('customers');
    }
}
