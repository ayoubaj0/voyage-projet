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
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->decimal('commission', 10, 2);
            $table->string('adresse');
            $table->string('ville');
            $table->string('tel_1');
            $table->string('tel_2')->nullable();
            $table->boolean('commercial')->default(false);;
            $table->boolean('client')->default(false);;
            $table->boolean('prestataire')->default(false);;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
