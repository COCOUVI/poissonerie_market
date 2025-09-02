<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Une catégorie peut avoir plusieurs produits
    public function produits()
    {
        return $this->hasMany(Produit::class, 'category_id');
    }
}
