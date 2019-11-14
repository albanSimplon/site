<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMajColumnToUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            
            $table->string('sexe')->nullable();
            $table->Integer('poids')->nullable();
            $table->decimal('taille', 3, 2)->nullable();
            $table->Integer('age')->nullable();
            $table->decimal('activity', 4, 3)->nullable();
            $table->Integer('mbBase')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->dropColumn(['sexe', 'poid', 'taille', 'age','activity', 'mbBase']);
        });
    }
}
