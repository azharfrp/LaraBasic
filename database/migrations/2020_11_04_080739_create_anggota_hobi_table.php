<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaHobiTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('anggota_hobi', function (Blueprint $table) {
            $table->bigIncrements('anggota_hobi_id');
            $table->foreignId('anggota_id')->references('anggota_id')->on('anggota');
            $table->foreignId('hobi_id')->references('hobi_id')->on('hobi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('anggota_hobi');
    }
}
