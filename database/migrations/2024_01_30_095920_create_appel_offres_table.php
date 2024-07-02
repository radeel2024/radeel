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
        Schema::create('appel_offres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('avis_offres_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('Nappeloffre');
            $table->string('title');
            $table->string('objet');
            $table->string('description');
            $table->string('Consistance');
            $table->string('cituation provisoire');
            $table->string('Estimation du projet HT');
            $table->string('Estimation du projet  TTC');
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
        Schema::dropIfExists('appel_offres');
    }
};
