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
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->foreignId('compagnie_id')->constrained();
            $table->date('date_aller');
            $table->date('date_retour')->nullable();
            $table->integer('nbr_sg_eco');
            $table->integer('nbr_sg_luxe');
            $table->decimal('montant_eco', 10, 2);
            $table->decimal('montant_luxe', 10, 2);
            $table->decimal('montant_chld', 10, 2);
            $table->decimal('montant_inf', 10, 2);
            $table->integer('nbr_sg_eco_r')->nullable();
            $table->integer('nbr_sg_luxe_r')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vols');
    }
};
