<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArabeColumnsToOrganisations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organisations', function (Blueprint $table) {
            $table->string('nom_organisation_ar');
            $table->string('adresse_ar');
            $table->text('type_d_organisation_ar',);
            $table->text('presentation_ar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organisations', function (Blueprint $table) {
            $table->dropColumn('nom_organisation_ar');
            $table->dropColumn('adresse_ar');
            $table->dropColumn('type_d_organisation_ar',);
            $table->dropColumn('presentation_ar');
        });
    }
}
