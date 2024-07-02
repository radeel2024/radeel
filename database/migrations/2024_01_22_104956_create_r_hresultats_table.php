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
        Schema::create('r_hresultats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('r_h_avisrecs')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('ecrit');
            $table->string('orale');
            $table->string('result');
            $table->string('file');
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
        Schema::dropIfExists('r_hresultats');
    }
};
