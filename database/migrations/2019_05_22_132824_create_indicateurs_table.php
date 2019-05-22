<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('superficie', 8, 3)->nullable();
            $table->integer('population')->nullable();
            $table->integer('population_masculine')->nullable();
            $table->integer('population_feminine')->nullable();
            $table->double('incidence_de_pauvrete', 8, 2)->nullable();
            $table->double('taux_alphabetisation', 8, 2)->nullable();
            $table->double('taux_scolarisarion', 8, 2)->nullable();
            $table->double('taux_etat_civil', 8, 2)->nullable();
            $table->string('region_code',5)->nullable();
            $table->string('arrondissement_code',5)->nullable();
            $table->string('departement_code',5)->nullable();
            $table->string('commune_code',5)->nullable();
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
        Schema::dropIfExists('indicateurs');
    }
}
