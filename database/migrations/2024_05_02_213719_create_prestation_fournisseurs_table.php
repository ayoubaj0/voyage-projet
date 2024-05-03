<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prestation_fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personne_id')->constrained()->onDelete('cascade');
            $table->foreignId('vol_id')->constrained()->onDelete('cascade');
            $table->foreignId('chambre_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('visa_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('autre_service_id')->constrained()->onDelete('cascade')->nullable();
            $table->decimal('total_prestation', 10, 2);
            $table->decimal('rest_prestation', 10, 2);
            $table->string('etat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestation_fournisseurs');
    }
};
