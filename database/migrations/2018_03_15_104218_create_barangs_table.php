<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('penitip_id')->unsigned();
            $table->integer('kategori_id')->unsigned();
            $table->integer('jumlah');
            $table->string('foto');
            $table->integer('harga');
            $table->integer('hargajual');
            $table->text('keterangan');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('penitip_id')->references('id')->on('penitip')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('barangs');
    }
}
