<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasoks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('id_distributor');
            $table->bigIncrements('id_buku');
            $table->integer('jumlah');
            $table->integer('tanggal');
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
        Schema::dropIfExists('pasoks');
    }
}
