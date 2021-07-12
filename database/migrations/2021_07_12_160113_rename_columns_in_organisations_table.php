<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organisations', function (Blueprint $table) {
            $table->renameColumn('nom_organisation', 'nom_organisation_fr');
            $table->renameColumn('adresse', 'adresse_fr');
            $table->renameColumn('types_des_organisations', 'type_d_organisation_fr');
            $table->renameColumn('presentation', 'presentation_fr');
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
            $table->renameColumn('nom_organisation_fr', 'nom_organisation');
            $table->renameColumn('adresse_fr', 'adresse');
            $table->renameColumn('type_d_organisation_fr', 'types_des_organisations');
            $table->renameColumn('presentation_fr', 'presentation');
        });
    }
}
