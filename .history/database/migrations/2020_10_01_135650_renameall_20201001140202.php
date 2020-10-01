<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Renameall extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('bibliothequess_specialities', 'bibliotheque_speciality');

        Schema::rename('bibliotheques_modules', 'bibliotheque_module');

        Schema::rename('ecole_specialties', 'ecole_speciality');

        Schema::rename('modules_specialities', 'module_speciality');

        Schema::rename('modules_users', 'module_user');

        Schema::rename('niveaux_specialities', 'bibliotheque_speciality');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
