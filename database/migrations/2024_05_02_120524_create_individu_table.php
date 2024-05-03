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
        Schema::create('individu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personne_id')->constrained()->onDelete('cascade');
            $table->string('nom_fr');
            $table->string('prenom_fr');
            $table->string('nom_ar');
            $table->string('prenom_ar');
            $table->string('num_pass');
            $table->string('cin');
            $table->string('sexe');
            $table->date('date_naiss');
            $table->date('date_delivrance');
            $table->date('date_expiration');
            $table->string('affiliation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individu');
    }
};
