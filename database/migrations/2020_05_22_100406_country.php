<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Country extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nama_negara');
            $table->string('benua');
            $table->integer('jml_positif');
            $table->integer('jml_sembuh');
            $table->integer('jml_meninggal');
            $table->date('tanggal');
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
        Schema::dropIfExists('country');
    }
}
