<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nom' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'Framework PHP moderne pour le développement web rapide',
                'couleur' => '#FF2D20',
                'icone' => 'fab fa-laravel',
                'active' => true,
            ],
            [
                'nom' => 'PHP',
                'slug' => 'php',
                'description' => 'Langage de programmation web côté serveur',
                'couleur' => '#777BB4',
                'icone' => 'fab fa-php',
                'active' => true,
            ],
            [
                'nom' => 'Base de Données',
                'slug' => 'database',
                'description' => 'Gestion des données avec SQL et NoSQL',
                'couleur' => '#336791',
                'icone' => 'fas fa-database',
                'active' => true,
            ],
            [
                'nom' => 'Frontend',
                'slug' => 'frontend',
                'description' => 'Développement côté client : HTML, CSS, JavaScript',
                'couleur' => '#61DAFB',
                'icone' => 'fas fa-code',
                'active' => true,
            ],
            [
                'nom' => 'DevOps',
                'slug' => 'devops',
                'description' => 'Déploiement, CI/CD, et infrastructure',
                'couleur' => '#FFA500',
                'icone' => 'fas fa-cogs',
                'active' => true,
            ],
            [
                'nom' => 'Architecture',
                'slug' => 'architecture',
                'description' => 'Patterns et bonnes pratiques de développement',
                'couleur' => '#8B4513',
                'icone' => 'fas fa-sitemap',
                'active' => true,
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
