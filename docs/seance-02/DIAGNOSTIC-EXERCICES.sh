#!/bin/bash

echo "🔍 ANALYSE DES PROBLÈMES - Séance 02"
echo "===================================="
echo

# Problème 1: Nom du modèle
echo "❌ PROBLÈME 1: Incohérence du nom de modèle"
echo "  - Code actuel utilise: App\Models\Categorie (français)"
echo "  - Exercices utilisent: App\Models\Category (anglais)"
echo "  - Fichiers affectés:"
echo "    • 03-DECOUVERTE-DATABASE.md (12 occurrences)"
echo "    • 05-TP-PRATIQUE-EXERCICES.md (20+ occurrences)"
echo "    • database/seeders/LivreSeeder.php"
echo

# Problème 2: Colonnes manquantes
echo "❌ PROBLÈME 2: Colonnes manquantes dans categories"
echo "  - Migration actuelle a: id, nom, description, slug, couleur"
echo "  - Exercices demandent: icone, active"
echo "  - Exercice demande scope: actives()"
echo

# Problème 3: Relation category vs categorie
echo "❌ PROBLÈME 3: Relations incohérentes"
echo "  - Modèle Livre utilise: categorie() et Category::class"
echo "  - Exercices utilisent: category"
echo "  - Seeder utilise: Category::where() qui va échouer"
echo

# Problème 4: Scope manquant
echo "❌ PROBLÈME 4: Scopes manquants"
echo "  - Categorie n'a pas le scope actives()"
echo "  - Exercices l'utilisent ligne 119"
echo

echo "📋 SOLUTIONS PROPOSÉES"
echo "======================"
echo

echo "OPTION A - Mettre à jour le code pour correspondre aux exercices (RECOMMANDÉ)"
echo "  1. Renommer Categorie → Category partout dans le code"
echo "  2. Ajouter colonnes icone et active à la migration"
echo "  3. Ajouter scope actives() au modèle"
echo "  4. Mettre à jour les relations"
echo

echo "OPTION B - Corriger les exercices pour correspondre au code existant"
echo "  1. Remplacer Category → Categorie dans tous les docs"
echo "  2. Adapter les exercices aux colonnes existantes"
echo "  3. Retirer les références aux colonnes manquantes"
echo

echo "🔧 DÉTAILS DES FICHIERS À CORRIGER"
echo "==================================="
echo

echo "FICHIERS CODE (si Option A):"
echo "  □ app/Models/Categorie.php → app/Models/Category.php"
echo "  □ app/Models/Livre.php (relation categorie → category)"
echo "  □ database/seeders/CategorieSeeder.php → CategorySeeder.php"
echo "  □ database/migrations/*_create_categories_table.php (+ icone, active)"
echo

echo "FICHIERS DOCS (si Option B):"
echo "  □ docs/seance-02/03-DECOUVERTE-DATABASE.md (~12 remplacements)"
echo "  □ docs/seance-02/05-TP-PRATIQUE-EXERCICES.md (~20+ remplacements)"
echo "  □ database/seeders/LivreSeeder.php (Category → Categorie)"
echo

echo "⚠️  RECOMMANDATION FINALE"
echo "========================"
echo
echo "OPTION A est recommandée car:"
echo "  ✅ Laravel utilise l'anglais par convention"
echo "  ✅ Plus cohérent avec l'écosystème Laravel"
echo "  ✅ Meilleure pratique professionnelle"
echo "  ✅ Les exercices sont déjà écrits en anglais"
echo
echo "Voulez-vous appliquer l'OPTION A automatiquement ? (créer un script fix)"
