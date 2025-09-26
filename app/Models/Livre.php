<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    
    protected $table = 'livres';
    
    protected $fillable = [
        'titre',
        'auteur',
        'annee',
        'nb_pages',
        'isbn',
        'resume',
        'couverture',
        'disponible',
        'categorie',
        'category_id'
    ];
    
    protected $casts = [
        'disponible' => 'boolean',
        'annee' => 'integer',
        'nb_pages' => 'integer'
    ];
    
    /**
     * Scope pour les livres disponibles
     */
    public function scopeDisponible($query)
    {
        return $query->where('disponible', true);
    }
    
    /**
     * Scope pour rechercher par titre ou auteur
     */
    public function scopeRecherche($query, $terme)
    {
        return $query->where('titre', 'like', '%' . $terme . '%')
                    ->orWhere('auteur', 'like', '%' . $terme . '%');
    }

    /**
     * Un livre appartient à une catégorie
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Scope pour filtrer par catégorie
     */
    public function scopeParCategorie($query, $categorySlug)
    {
        return $query->whereHas('category', function ($q) use ($categorySlug) {
            $q->where('slug', $categorySlug);
        });
    }

    /**
     * Accesseur pour l'URL du livre
     */
    public function getUrlAttribute()
    {
        return route('livre.show', $this->id);
    }
}