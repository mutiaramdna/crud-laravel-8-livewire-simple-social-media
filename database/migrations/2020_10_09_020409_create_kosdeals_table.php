<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosdealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosdeals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kost');
            $table->text('alamat');
            $table->integer('harga');
            $table->string('gender_kost');
            $table->string('fasilitas');
            $table->string('pemilik');
            $table->bigInteger('no_pemilik');
            $table->string('pengelola');
            $table->bigInteger('no_pengelola');
            $table->string('nama_bd');
            $table->string('nama_as');
            $table->string('nama_cs');
            $table->string('status');
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
        Schema::dropIfExists('kosdeals');
    }
}
