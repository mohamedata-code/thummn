<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_question_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_question_id');
            $table->foreign('car_question_id')
                ->on('car_questions')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('name_ar');
            $table->string('name_en');
            $table->string('image')->nullable();
            $table->string('correct'); // النسبة المئوية للاجابة
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
        Schema::dropIfExists('car_question_answers');
    }
}
