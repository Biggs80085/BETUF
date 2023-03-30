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
        Schema::create('interventions', function (Blueprint $table) {
            $table->bigInteger("id");
            $table->bigInteger("tunnelID")  
                  ->unsigned()  
                  ->index(); 
            $table->foreign("tunnelID")  
                  ->references("id")  
                  ->on("tunnels")  
                  ->onDelete("cascade");
            $table->bigInteger("userID")  
                  ->unsigned()  
                  ->index(); 
            $table->foreign("userID")  
                  ->references("id")  
                  ->on("users")  
                  ->onDelete("cascade");  
            $table->string("title");
            $table->dateTime("dateIntervention");
            $table->dateTime("dateFinIntervention");
            $table->string("description");
            $table->binary("rapport");
            $table->string("typeVisite");
            $table->timestamps();
            $table->primary(["id","tunnelID", "userID"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
    
};
