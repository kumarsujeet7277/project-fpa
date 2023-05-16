<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('from_country');
            $table->unsignedBigInteger('from_city');
            $table->unsignedBigInteger('to_country');
            $table->unsignedBigInteger('to_city');
            $table->integer('adults')->default(0);
            $table->integer('children')->default(0);
            $table->float('price', 8,2);
            $table->foreign('from_country')->references('id')->on('countries');
            $table->foreign('from_city')->references('id')->on('cities');
            $table->foreign('to_country')->references('id')->on('countries');
            $table->foreign('to_city')->references('id')->on('cities');
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
        Schema::dropIfExists('passengers');
    }
};
