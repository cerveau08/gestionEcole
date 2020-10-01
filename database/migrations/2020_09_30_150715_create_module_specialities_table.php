<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_specialities', function (Blueprint $table) {
            
                $table->engine = 'InnoDB';
                $table->id();
                $table->bigInteger('speciality_id')->unsigned();
                $table->foreign('speciality_id')
                      ->references('id')
                      ->on('specialities');

                $table->bigInteger('module_id')->unsigned();
                $table->foreign('module_id')
                      ->references('id')
                      ->on('modules');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_specialities');
    }
}
