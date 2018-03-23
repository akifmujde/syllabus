<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dersler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dersler',function (Blueprint $table){
            $table->increments('id');
            $table->string('ders_adi')->unique();
            $table->string('ders_slug')->unique();
            $table->tinyInteger('ders_saati');
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
        Schema::dropIfExists('dersler');
    }
}
