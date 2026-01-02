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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();    
            $table->string('module');
            $table->string('statut');
            $table->foreignId('semestre_code')->nullable()->constrained('semestre','id');
            $table->foreignId('filiere_code')->nullable()->constrained('filieres','id');
            $table->foreignId('responsable_code')->nullable()->constrained('responsable','id');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
