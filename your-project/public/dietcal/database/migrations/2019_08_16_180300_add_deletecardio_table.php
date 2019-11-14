<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletecardioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('musculations', function (Blueprint $table) {
            $table->dropColumn(['cardio_temps', 'cardio_calories']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('musculations', function (Blueprint $table) {
            $table->Integer('cardio_temps')->nullable();
            $table->Integer('cardio_calories')->nullable();
            });
    }
}
