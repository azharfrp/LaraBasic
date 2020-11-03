<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('mapel', function (Blueprint $table) {
            $table->bigIncrements('mapel_id');
            $table->foreignId('guru_id')->references('guru_id')->on('guru');
            $table->string('mapel_nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('mapel');
    }
}
