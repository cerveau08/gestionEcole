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
            Schema::create('users_specialities', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->id();
                $table->bigInteger('speciality_id')->unsigned();
                $table->foreign('speciality_id')
                      ->references('id')
                      ->on('specialities');

                $table->bigInteger('ecole_id')->unsigned();
                $table->foreign('ecole_id')
                      ->references('id')
                      ->on('ecoles');
            });
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
