<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliothequesModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotheques_modules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('speciality_id')->unsigned();
            $table->foreign('speciality_id')
                  ->references('id')
                  ->on('specialities');

            $table->bigInteger('niveau_id')->unsigned();
            $table->foreign('niveau_id')
                  ->references('id')
                  ->on('niveaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bibliotheques_modules');
    }
}
