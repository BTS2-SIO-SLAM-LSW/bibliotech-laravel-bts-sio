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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('couleur', 7)->default('#6c757d'); // Code couleur hexadécimal
            $table->string('icone')->default('fas fa-book'); // Classe icône Font Awesome
            $table->boolean('active')->default(true);
            $table->timestamps();
            
            // Index pour améliorer les performances
            $table->index('active');
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
