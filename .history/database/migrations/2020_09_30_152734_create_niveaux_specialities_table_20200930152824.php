<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauxSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_specialities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('speciality_id')->unsigned();
            $table->foreign('speciality_id')
                  ->references('id')
                  ->on('specialities');

            $table->bigInteger('niveau_id')->unsigned();
            $table->foreign('niveau_id')
                  ->references('id')
                  ->on('niveaus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('niveaux_specialities');
    }
}
