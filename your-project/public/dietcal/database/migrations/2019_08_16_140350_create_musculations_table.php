<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musculations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('utilisateurs_id');
            $table->foreign('utilisateurs_id')->references('id')->on('utilisateurs')->onDelete('cascade');
            $table->string('jour')->nullable();
            $table->string('exercise')->nullable();
            $table->string('repetition')->nullable();
            $table->Integer('kilos')->nullable();
            $table->Integer('cardio_temps')->nullable();
            $table->Integer('cardio_calories')->nullable();
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
        Schema::dropIfExists('musculations');
    }
}
