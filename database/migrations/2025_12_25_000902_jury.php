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
        Schema::create('jury', function (Blueprint $table) {
            $table->id();
            $table->string('code_jury')->unique();
            $table->string('nom_jury')->nullable();
            $table->string('promotion')->unique();
            $table->string('semestre')->nullable(); 
            $table->string('session')->nullable();
            $table->string('annee-academique')->nullable();
            $table->string('date')->nullable();
            $table->string('statut')->nullable();
            $table->string('president')->nullable();
            $table->string('secretaire')->nullable();
            $table->string('membres')->nullable();
            $table->string('remarques')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        //
    }
};
