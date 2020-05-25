<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Continent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continent', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id_benua');
            $table->timestamps();
            $table->primary('id_benua');
        });

        Schema::table('country', function ($table) {
            $table->foreign('benua')
            ->references('id_benua')
            ->on('continent')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('continent');
    }
}
