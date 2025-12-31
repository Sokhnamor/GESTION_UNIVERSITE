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
         schema::create('responsable', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('nom_prenom');
            $table->string('email');
            $table->string('departement');
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
