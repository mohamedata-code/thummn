<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarSubOfSubCategoryPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_sub_of_sub_category_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_sub_of_sub_category_id');
            $table->foreign('car_sub_of_sub_category_id','car_sub_of_sub_category_id')
                ->on('car_sub_of_sub_categories')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('year');
            $table->decimal('low_price',20,3);
            $table->decimal('below_normal',20,3);
            $table->decimal('normal',20,3);
            $table->decimal('above_normal',20,3);
            $table->decimal('high',20,3);
            $table->enum('status',['enabled','disabled']);

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
        Schema::dropIfExists('car_sub_of_sub_category_prices');
    }
}
