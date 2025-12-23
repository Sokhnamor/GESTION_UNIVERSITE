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
        Schema::create('etudiants', function (Blueprint $table) {
            //
            $table->id();
            $table->string('matricule', 20)->unique();
            $table->string('numero_etudiant', 20)->unique();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('sexe', 10);
            $table->date('date_naissance');
            $table->string('niveau', 20);
            $table->string('promotion', 20);
            $table->string('statut', 20);
            $table->string('email', 50)->unique();
            $table->string('telephone', 20);
            $table->string('filiere', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants', function (Blueprint $table) {
            //
        });
    }
};
