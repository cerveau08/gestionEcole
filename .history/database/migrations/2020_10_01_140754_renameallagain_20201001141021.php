<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Renameallagain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('module_specialities', 'module_speciality');

        Schema::rename('modules_users', 'module_user');

        Schema::rename('niveaux_bibliotheques', 'niveau_bibliotheque');

        Schema::rename('niveaux_specialities', 'niveau_speciality');

        Schema::rename('niveaux_users', 'niveau_user');

        Schema::rename('semestres_specialities', 'semestre_speciality');

        Schema::rename('users_ecoles', 'user_ecole');

        Schema::rename('users_roles', 'user_role');

        Schema::rename('users_specialities', 'user_speciality');
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
