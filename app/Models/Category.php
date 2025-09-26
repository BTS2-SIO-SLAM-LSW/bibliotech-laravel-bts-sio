<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    /**
     * Le nom de la table associée au modèle.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'slug',
        'description',
        'couleur',
        'icone',
        'active',
    ];

    /**
     * Les attributs qui doivent être castés.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Événements du modèle.
     */
    protected static function boot()
    {
        parent::boot();

        // Génère automatiquement le slug à partir du nom
        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->nom);
            }
        });
    }

    /**
     * Une catégorie a plusieurs livres.
     */
    public function livres()
    {
        return $this->hasMany(Livre::class, 'category_id');
    }

    /**
     * Scope pour les catégories actives.
     */
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
