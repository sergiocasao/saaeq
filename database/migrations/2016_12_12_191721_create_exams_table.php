<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->unsignedInteger('theme_id')->nullable();
            $table->timestamps();

            $table  ->foreign('theme_id')
                    ->references('id')
                    ->on('themes')
                    ->onDelete('RESTRICT');
        });

        Schema::create('exam_user', function (Blueprint $table) {

            $table->unsignedInteger('exam_id');
            $table->unsignedInteger('user_id');
            $table->double('qualification');
            $table->timestamps();

            $table  ->foreign('exam_id')
                    ->references('id')
                    ->on('exams')
                    ->onDelete('RESTRICT');

            $table  ->foreign('user_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('exam_user');
        Schema::dropIfExists('exams');
    }
}
