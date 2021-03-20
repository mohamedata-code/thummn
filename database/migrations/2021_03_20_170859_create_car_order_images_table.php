<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarOrderImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_order_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_order_id');
            $table->foreign('car_order_id')->on('car_orders')
                ->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->string('image');
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
        Schema::dropIfExists('car_order_images');
    }
}
