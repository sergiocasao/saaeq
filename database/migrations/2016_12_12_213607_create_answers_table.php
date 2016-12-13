<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');
            $table->boolean('correct')->default(false);
            $table->unsignedInteger('learn_type_id')->nullable()->default(null);
            $table->unsignedInteger('question_id');
            $table->timestamps();

            $table  ->foreign('learn_type_id')
                    ->references('id')
                    ->on('learn_types')
                    ->onDelete('RESTRICT');

            $table  ->foreign('question_id')
                    ->references('id')
                    ->on('questions')
                    ->onDelete('RESTRICT');
        });

        Schema::create('answer_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('answer_id')->unsigned();

            $table->primary(['user_id','answer_id']);

            $table  ->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('RESTRICT');

            $table  ->foreign('answer_id')
                    ->references('id')
                    ->on('answers')
                    ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_user');
        Schema::dropIfExists('answers');
    }
}
