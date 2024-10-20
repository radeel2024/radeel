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
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email');
            $table->string('tele');
            $table->string('service');
            $table->string('cv');
            $table->string('Dstage');
            $table->string('assurance');
            $table->string('cin');
            $table->string('passsanitaire');
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
        Schema::dropIfExists('stages');
    }
};
