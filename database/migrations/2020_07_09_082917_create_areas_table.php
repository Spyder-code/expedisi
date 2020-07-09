<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('id_expedisi');
            $table->integer('harga');
            $table->string('dari');
            $table->string('tujuan');
            $table->timestamps();

            $table->foreign('id_expedisi')->references('id')->on('expeditions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
