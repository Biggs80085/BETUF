<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tunnels', function (Blueprint $table) {
            $table->id();
            $table->string("coordGPS");
            $table->string("ville");
            $table->integer("codePostal");
            $table->integer("hauteurTunnel");
            $table->integer("nbTube");
            $table->integer("nbVoieParTube");
            $table->integer("anneeConstruction");
            $table->date("dateDernièreVisite");
            $table->integer("numMAGALI");
            $table->integer("numAGORA");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tunnels');
    }
};
