<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('invoice_number');
            $table->unsignedBigInteger('sold_by');
            $table->unsignedBigInteger('invoice_items');
            $table->unsignedBigInteger('customers');
            $table->date('date');
            $table->string('status');
            $table->integer('discount');
            $table->foreignId('vat_group_id');
            $table->timestamps();
        });

        Schema::table('invoices', function (Blueprint $table){
            $table->foreign('sold_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('invoice_items')->references('id')->on('invoice_itmes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('customers')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign(['sold_by']);
            $table->dropForeign(['invoice_items']);
            $table->dropForeign(['customers']);
        });
        Schema::dropIfExists('invoices');
    }
}
