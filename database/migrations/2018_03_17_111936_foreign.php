<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function (Blueprint $table){
            $table->integer('role_id')->unsigned()->default(1);
            $table->foreign('role_id')->references('id')->on('role');
        });

        Schema::table('DersHoca',function (Blueprint $table){
            $table->integer('ders_id')->unsigned();
            $table->integer('hoca_id')->unsigned();
            $table->foreign('ders_id')->references('id')->on('dersler');
            $table->foreign('hoca_id')->references('id')->on('users');
        });

        Schema::table('HocaSaat',function (Blueprint $table){
            $table->integer('gun_id')->unsigned();
            $table->integer('saat_id')->unsigned();
            $table->integer('hoca_id')->unsigned();
            $table->foreign('gun_id')->references('id')->on('gunler');
            $table->foreign('saat_id')->references('id')->on('zamanlar');
            $table->foreign('hoca_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
