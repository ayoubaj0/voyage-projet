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
        Schema::create('bon_deponse_prestation_four', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bon_deponse_id')->constrained()->onDelete('cascade');
            $table->foreignId('prestation_fournisseur_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bon_deponse_prestation_four');
    }
};
