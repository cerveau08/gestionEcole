<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestresSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semestres_specialities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('speciality_id')->unsigned();
            $table->foreign('speciality_id')
                  ->references('id')
                  ->on('specialities');

            $table->bigInteger('semestre_id')->unsigned();
            $table->foreign('semestre_id')
                  ->references('id')
                  ->on('semestrex');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semestres_specialities');
    }
}
