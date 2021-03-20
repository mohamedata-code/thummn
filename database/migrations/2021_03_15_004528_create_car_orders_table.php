<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_orders', function (Blueprint $table) {
            $table->id();
            $table->string('car_title');

            $table->unsignedBigInteger('car_category_id')->nullable();
            $table->foreign('car_category_id')
                ->on('car_categories')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->unsignedBigInteger('car_sub_category_id')->nullable();
            $table->foreign('car_sub_category_id','f_sub_c_o')
                ->on('car_sub_categories')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->unsignedBigInteger('car_sub_of_sub_category_id')->nullable();
            $table->foreign('car_sub_of_sub_category_id','f_sub_of_sub_c_o')
                ->on('car_sub_of_sub_categories')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('car_sub_of_sub_category_price_id')->nullable();
            $table->foreign('car_sub_of_sub_category_price_id','f_sub_of_sub_cp_o')
                ->on('car_sub_of_sub_category_prices')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->decimal('car_estimate_price',10,3)->nullable();
            $table->decimal('car_low_price',10,3)->nullable();
            $table->decimal('car_used_persons',10,3)->nullable();
            $table->json('question_answers');

            $table->decimal('high_price',10,3)->nullable();
            $table->decimal('fair_price',10,3);
            $table->decimal('low_price',10,3)->nullable();

            $table->enum('status',['payed','not_payed'])->default('not_payed');

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
        Schema::dropIfExists('car_orders');
    }
}
