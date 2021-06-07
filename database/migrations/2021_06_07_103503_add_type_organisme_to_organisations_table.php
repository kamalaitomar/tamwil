<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeOrganismeToOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organisations', function (Blueprint $table) {
            $table->string('type_organisme',120);
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
            $table->dropColumn('type_organisme');
        });
    }
}
