<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('montant');
            $table->string('type');
            $table->timestamps();
            $table->foreignId('userCreator_id')
                    ->references('id')
                    ->on('users')
                    ->onCascade('delete');
        });

        Schema::table('paiements', function (Blueprint $table) {
            $table->foreignId('userDo_id')
                    ->references('id')
                    ->on('users')
                    ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}
