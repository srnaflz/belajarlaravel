<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembuatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembuats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul')->unique();
            $table->string('nama_pembuat')->nullable();
            $table->text('synopsis')->nullable();
            $table->date('tahun_pembuatan')->nullable();
            $table->string('penerbit')->nullable();                                                        
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
        Schema::dropIfExists('pembuats');
    }
}
