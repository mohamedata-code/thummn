<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_responses', function (Blueprint $table) {
            $table->id();
            $table->enum('payment_type',['car_order','electronic_order']);
            $table->integer('item_id'); // order id
            $table->string('payment_method')->nullable();
            $table->bigInteger('merchant_transaction_id')->nullable();
            $table->longText('status_msg')->nullable();
            $table->longText('payment_response')->nullable();
            $table->string('bank')->nullable();
            $table->string('transaction_status')->nullable();
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
        Schema::dropIfExists('payment_responses');
    }
}
