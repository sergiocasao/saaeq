<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('processing_learn_type_id')->nullable();
            $table->unsignedInteger('perception_learn_type_id')->nullable();
            $table->unsignedInteger('representation_learn_type_id')->nullable();
            $table->unsignedInteger('comprenhention_learn_type_id')->nullable();

            $table->unsignedInteger('theme_id');

            $table->string('video')->nullable();

            $table->text('content');
            $table->boolean('default')->default(false);

            $table->timestamps();

            $table  ->foreign('processing_learn_type_id')
                    ->references('id')
                    ->on('learn_types')
                    ->onDelete('RESTRICT');

            $table  ->foreign('perception_learn_type_id')
                    ->references('id')
                    ->on('learn_types')
                    ->onDelete('RESTRICT');

            $table  ->foreign('representation_learn_type_id')
                    ->references('id')
                    ->on('learn_types')
                    ->onDelete('RESTRICT');

            $table  ->foreign('comprenhention_learn_type_id')
                    ->references('id')
                    ->on('learn_types')
                    ->onDelete('RESTRICT');

            $table  ->foreign('theme_id')
                    ->references('id')
                    ->on('themes')
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
        Schema::dropIfExists('contents');
    }
}
