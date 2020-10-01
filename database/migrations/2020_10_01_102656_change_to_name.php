<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeToName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bibliotheques', function (Blueprint $table) {
            $table->renameColumn('libele', 'name');
        });

        Schema::table('chapitres', function (Blueprint $table) {
            $table->renameColumn('nom', 'name');
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->renameColumn('libele', 'name');
        });
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
