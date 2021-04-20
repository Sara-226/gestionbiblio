<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->bigInteger('auteur_id')->unsigned();
            $table->foreign('auteur_id')->references('id')->on('auteurs');
            $table->bigInteger('pay_id')->unsigned();
            $table->foreign('pay_id')->references('id')->on('pays');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
            $table->date('anneparution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livres');
    }
}
