<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_expedisi');
            $table->string('pengirim');
            $table->string('alamat_pengirim');
            $table->string('penerima');
            $table->string('alamat_penerima');
            $table->string('barang');
            $table->string('berat');
            $table->string('dari');
            $table->string('tujuan');
            $table->string('harga');
            $table->string('kode');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('id_expedisi')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
