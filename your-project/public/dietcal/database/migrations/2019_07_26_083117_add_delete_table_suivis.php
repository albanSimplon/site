<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeleteTableSuivis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('suivis', function (Blueprint $table) {
        $table->dropForeign(['utilisateurs_id']);    
        $table->foreign('utilisateurs_id')->references('id')->on('utilisateurs')->onDelete('cascade')->change();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('suivis', function (Blueprint $table) {

            $table->foreign('utilisateurs_id')->references('id')->on('utilisateurs');

});
    }
}
