<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArabeColumnsToOffres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offres', function (Blueprint $table) {
            $table->string('nom_offre_ar');
            $table->string('objet_ar');
            $table->text('description_ar',);
            $table->text('condition_ar');
            $table->string('fascicule_ar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offres', function (Blueprint $table) {
            $table->dropColumn('nom_offre_ar');
            $table->dropColumn('objet_ar');
            $table->dropColumn('description_ar');
            $table->dropColumn('condition_ar');
            $table->dropColumn('fascicule_ar');
        });
    }
}
