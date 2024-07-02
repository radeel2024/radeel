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
        Schema::create('physiqueresiliations', function (Blueprint $table) {
            $table->id();
            $table->string('gerance');
            $table->string('numPolice');
            $table->string('addressRD');
            $table->string('province');
            $table->string('status');
            $table->string('namecomplete');
            $table->string('cingerant');
            $table->string('tele');
            $table->string('email');
            $table->string('numCB');
            $table->string('adressCorres');
            $table->string('ville');
            $table->string('cin');
            $table->string('Contrat');
            $table->string('RIB');
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
        Schema::dropIfExists('physiqueresiliations');
    }
};
