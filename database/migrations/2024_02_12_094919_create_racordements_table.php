<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racordements', function (Blueprint $table) {
            $table->id();
            $table->string('gerance');
            $table->string('typeraccordement');
            $table->string('adressabonnement');
            $table->string('province');
            $table->string('client');
            $table->string('status');
            $table->string('namecomplete');
            $table->string('cin');
            $table->string('tele');
            $table->string('email');
            $table->string('adresscorresp');
            $table->string('ville');
            $table->string('naturedemandeur');
            $table->string('raisonsociale');
            $table->string('numeroregister');
            
            $table->string('cingerantfile');
            $table->string('Attestationconstruction');
            $table->string('Attestationmunicipalité');
            $table->string('justificationoccupationfile');
            $table->string('statusentitefile');
            $table->string('registercommercefile');
            $table->string('recudevisfile');
            $table->string('cinfile');
            $table->string('autorisationlegaliseefile');
            $table->string('croquisfile');
            $table->string('planapprouvefile');
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
        Schema::dropIfExists('racordements');
    }
};
