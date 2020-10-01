<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('montant');
            $table->timestamps('datePaye');
            $table->string('type');
            $table->timestamps();
            $table->foreign('userCreator')
                    ->references('id')
                    ->on('articles')
                    ->onCascade('delete');
            $table->foreign('u')
                    ->references('id')
                    ->on('articles')
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
        Schema::dropIfExists('factures');
    }
}
