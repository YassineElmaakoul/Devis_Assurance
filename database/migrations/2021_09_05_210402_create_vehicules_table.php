<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->string('immatriculation')->nullable();
            $table->primary('immatriculation');
            $table->date('date_circulation');
            $table->string('marque');
            $table->string('val_neuf');
            $table->string('val_venal');
            $table->string('carburant');
            $table->integer('puissance');
            $table->string('cin_client');
            $table->foreign('cin_client')->references('cin')->on('clients')->onDelete('cascade');;
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
        Schema::dropIfExists('vehicules');
    }
}
