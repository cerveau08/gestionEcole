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
            $table->bigInteger('module_id')->unsigned();
            $table->foreign('module_id')
                  ->references('id')
                  ->on('modules');

            $table->bigInteger('bibliotheque_id')->unsigned();
            $table->foreign('bibliotheque_id')
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
