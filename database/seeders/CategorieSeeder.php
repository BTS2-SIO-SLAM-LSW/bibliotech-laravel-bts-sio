<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nom' => 'Roman',
                'description' => 'Œuvres de fiction narrative en prose',
                'slug' => 'roman',
                'couleur' => '#EF4444'
            ],
            [
                'nom' => 'Science-Fiction',
                'description' => 'Littérature d\'anticipation et de science-fiction',
                'slug' => 'science-fiction',
                'couleur' => '#3B82F6'
            ],
            [
                'nom' => 'Fantastique',
                'description' => 'Littérature fantastique et fantasy',
                'slug' => 'fantastique',
                'couleur' => '#8B5CF6'
            ],
            [
                'nom' => 'Policier',
                'description' => 'Romans policiers et thrillers',
                'slug' => 'policier',
                'couleur' => '#1F2937'
            ],
            [
                'nom' => 'Biographie',
                'description' => 'Biographies et autobiographies',
                'slug' => 'biographie',
                'couleur' => '#F59E0B'
            ],
            [
                'nom' => 'Histoire',
                'description' => 'Livres d\'histoire et documentaires historiques',
                'slug' => 'histoire',
                'couleur' => '#10B981'
            ],
            [
                'nom' => 'Informatique',
                'description' => 'Manuels et guides techniques en informatique',
                'slug' => 'informatique',
                'couleur' => '#6366F1'
            ],
            [
                'nom' => 'Jeunesse',
                'description' => 'Littérature pour enfants et adolescents',
                'slug' => 'jeunesse',
                'couleur' => '#EC4899'
            ]
        ];

        foreach ($categories as $categorieData) {
            Categorie::create($categorieData);
        }
    }
}