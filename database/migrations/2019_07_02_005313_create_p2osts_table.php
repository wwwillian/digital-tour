<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateP2ostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p2osts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('mensagem')->nullable();
            $table->string('arquivo');
            $table->integer('likes');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p2osts');
    }
}
