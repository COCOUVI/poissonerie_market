<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        Produit::create([
            'name' => 'Tilapia frais',
            'description' => 'Poisson Tilapia élevé localement',
            'price' => 2500, // en FCFA
            'stock' => 100,  // en kg
            'image' => null, // pas d'image pour l’instant
            'category_id' => 1 // ID de la catégorie "Poissons"
        ]);
    }
}
