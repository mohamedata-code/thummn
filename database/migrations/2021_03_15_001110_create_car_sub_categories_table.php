<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_category_id');
            $table->foreign('car_category_id')
                ->on('car_categories')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('name_ar');
            $table->string('name_en');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('car_sub_categories');
    }
}
