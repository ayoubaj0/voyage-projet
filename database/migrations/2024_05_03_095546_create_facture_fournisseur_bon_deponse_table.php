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
        Schema::create('facture_fournisseur_bon_deponse', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facture_fournisseur_id')->constrained()->onDelete('cascade');
            $table->foreignId('bon_deponse_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facture_fournisseur_bon_deponse');
    }
};
