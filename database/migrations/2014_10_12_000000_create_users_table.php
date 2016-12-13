<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');

            $table->boolean('active')->default(false);
            $table->string('token')->nullable();

            $table->boolean('test_finished')->default(false);

            $table->string('email');
            $table->string('password');
            $table->rememberToken();

            $table->unsignedInteger('processing_learn_type_id')->nullable();
            $table->unsignedInteger('perception_learn_type_id')->nullable();
            $table->unsignedInteger('representation_learn_type_id')->nullable();
            $table->unsignedInteger('comprenhention_learn_type_id')->nullable();

            $table->timestamps();
            $table->softDeletes();

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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
