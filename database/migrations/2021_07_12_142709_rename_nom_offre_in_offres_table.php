<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNomOffreInOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offres', function (Blueprint $table) {
            $table->renameColumn('nom_offre', 'nom_offre_fr');
            $table->renameColumn('objet', 'objet_fr');
            $table->renameColumn('description', 'description_fr');
            $table->renameColumn('condition', 'condition_fr');
            $table->renameColumn('fascicule', 'fascicule_fr');
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
            $table->renameColumn('nom_offre_fr', 'nom_offre');
            $table->renameColumn('objet_fr', 'objet');
            $table->renameColumn('description_fr', 'description');
            $table->renameColumn('condition_fr', 'condition');
            $table->renameColumn('fascicule_fr', 'fascicule');
        });
    }
}
