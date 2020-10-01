<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcolesSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoles_specialties', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('ecole_id')->unsigned();
            $table->foreign('ecole_id')
                  ->references('id')
                  ->on('ecoles');

            $table->bigInteger('speciality_id')->unsigned();
            $table->foreign('speciality_id')
                  ->references('id')
                  ->on('specialities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecoles_specialties');
    }
}
