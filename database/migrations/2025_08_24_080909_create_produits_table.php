<?php

// database/migrations/xxxx_xx_xx_create_produits_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nom du produit
            $table->text('description')->nullable();
            $table->unsignedInteger('price');    // prix en FCFA
            $table->unsignedInteger('stock');    // stock en kg
            $table->string('image')->nullable(); // chemin 'products/...'
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->cascadeOnDelete();
            $table->timestamps();

            $table->index('category_id');
        });
    }

    public function down(): void {
        Schema::dropIfExists('produits');
    }
};
