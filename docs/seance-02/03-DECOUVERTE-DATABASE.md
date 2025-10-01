# 🔍 TP Découverte : Base de Données SQLite

**Explorer la base de données BiblioTech et comprendre sa structure**

---

## 🎯 Objectifs du TP

À la fin de ce TP, vous saurez :
- ✅ **Analyser** la structure d'une base SQLite
- ✅ **Naviguer** dans les tables avec Tinker
- ✅ **Comprendre** les relations entre modèles
- ✅ **Tester** les requêtes Eloquent de base
- ✅ **Identifier** les données existantes

**⏱️ Durée estimée :** 45 minutes

---

## 🚀 Prérequis

### **✅ Vérifications Initiales**

```bash
# 1. Vérifier que vous êtes sur la bonne branche
git branch
# Devrait afficher : * seance-02-database-sqlite

# 2. Vérifier la présence de la base SQLite
ls -la database/database.sqlite
# Si le fichier n'existe pas : touch database/database.sqlite

# 3. Vérifier l'état des migrations
php artisan migrate:status
```

**Résultat attendu :**
```bash
+------+--------------------------------------------------+-------+
| Ran? | Migration                                        | Batch |
+------+--------------------------------------------------+-------+
| Yes  | 0001_01_01_000000_create_users_table             | 1     |
| Yes  | 2025_09_26_113440_create_livres_table            | 1     |
| Yes  | 2025_09_26_113507_create_utilisateurs_table      | 1     |
| Yes  | [timestamp]_create_categories_table              | 1     |
| Yes  | [timestamp]_add_category_id_to_livres_table      | 1     |
+------+--------------------------------------------------+-------+
```

---

## 📊 Partie 1 : Explorer la Structure (15 min)

### **🔍 Étape 1.1 : Inspection des Tables**

```bash
php artisan tinker
```

```php
// 1. Lister toutes les tables
>>> Schema::getTableListing()

// 2. Examiner la structure de la table categories
>>> Schema::getColumnListing('categories')

// 3. Examiner la structure de la table livres
>>> Schema::getColumnListing('livres')

// 4. Examiner la structure de la table utilisateurs
>>> Schema::getColumnListing('utilisateurs')
```

**📝 Question :** Notez les colonnes présentes dans chaque table. Identifiez les clés étrangères.

### **🔍 Étape 1.2 : Vérifier les Relations**

```php
// Dans Tinker
// 5. Vérifier les contraintes de clé étrangère
>>> DB::select("PRAGMA foreign_key_list(livres)")

// 6. Vérifier les index
>>> DB::select("PRAGMA index_list(categories)")
```

**📝 Questions :**
- Quelle table contient les clés étrangères ?
- Vers quelle table pointent-elles ?
- Quels index ont été créés automatiquement ?

---

## 🗃️ Partie 2 : Comprendre les Données (15 min)

### **🔍 Étape 2.1 : Peupler la Base (si vide)**

```bash
# Si aucune donnée n'existe, lancer les seeders
php artisan migrate:fresh --seed
```

### **🔍 Étape 2.2 : Explorer les Données**

```php
// Dans Tinker
// 1. Compter les enregistrements
>>> App\Models\Category::count()
>>> App\Models\Livre::count()
>>> App\Models\Utilisateur::count()

// 2. Voir toutes les catégories
>>> App\Models\Category::all()

// 3. Examiner une catégorie en détail
>>> $cat = App\Models\Category::first()
>>> $cat
>>> $cat->nom
>>> $cat->couleur
>>> $cat->slug

// 4. Voir tous les livres
>>> App\Models\Livre::all()->pluck('titre', 'id')
```

**📝 Questions :**
- Combien de catégories ont été créées ?
- Combien de livres sont dans la base ?
- Quelles sont les catégories disponibles ?

### **🔍 Étape 2.3 : Analyser les Relations**

```php
// Dans Tinker
// 5. Tester la relation Livre -> Category (belongsTo)
>>> $livre = App\Models\Livre::first()
>>> $livre->titre
>>> $livre->category
>>> $livre->category->nom

// 6. Tester la relation Category -> Livres (hasMany)
>>> $category = App\Models\Category::first()
>>> $category->nom
>>> $category->livres
>>> $category->livres->count()
>>> $category->livres->pluck('titre')

// 7. Vérifier que toutes les relations fonctionnent
>>> App\Models\Livre::all()->each(function($livre) {
    echo $livre->titre . " -> " . ($livre->category ? $livre->category->nom : 'Aucune catégorie') . PHP_EOL;
});
```

**📝 Questions :**
- Tous les livres ont-ils une catégorie ?
- Combien de livres y a-t-il par catégorie ?
- Les relations bidirectionnelles fonctionnent-elles ?

---

## 🔍 Partie 3 : Tester les Requêtes Eloquent (15 min)

### **🔍 Étape 3.1 : Requêtes de Base**

```php
// Dans Tinker
// 1. Filtrer les livres disponibles
>>> App\Models\Livre::where('disponible', true)->count()
>>> App\Models\Livre::where('disponible', true)->pluck('titre')

// 2. Rechercher par titre
>>> App\Models\Livre::where('titre', 'like', '%Laravel%')->get()

// 3. Rechercher par auteur
>>> App\Models\Livre::where('auteur', 'like', '%John%')->get()

// 4. Trier par date de création
>>> App\Models\Livre::orderBy('created_at', 'desc')->first()
>>> App\Models\Livre::latest()->first()
```

### **🔍 Étape 3.2 : Requêtes avec Relations**

```php
// 5. Eager Loading (performance optimisée)
>>> $livres = App\Models\Livre::with('category')->get()
>>> $livres->each(function($livre) {
    echo $livre->titre . " [" . $livre->category->nom . "]" . PHP_EOL;
});

// 6. Filtrer par catégorie (via relation)
>>> App\Models\Livre::whereHas('category', function($query) {
    $query->where('nom', 'Laravel');
})->get()->pluck('titre')

// 7. Compter les livres par catégorie
>>> App\Models\Category::withCount('livres')->get()->each(function($cat) {
    echo $cat->nom . ": " . $cat->livres_count . " livre(s)" . PHP_EOL;
});
```

### **🔍 Étape 3.3 : Tester les Scopes**

```php
// 8. Tester le scope disponible
>>> App\Models\Livre::disponible()->count()
>>> App\Models\Livre::disponible()->pluck('titre')

// 9. Si le scope recherche existe, le tester
>>> App\Models\Livre::recherche('PHP')->get()

// 10. Chaîner plusieurs scopes
>>> App\Models\Livre::disponible()->with('category')->latest()->first()
```

**📝 Questions :**
- Combien de livres sont marqués comme disponibles ?
- Quelle est la différence de performance entre avec et sans Eager Loading ?
- Les scopes personnalisés fonctionnent-ils correctement ?

---

## 🧪 Partie 4 : Expérimentations Avancées (Bonus)

### **🔍 Étape 4.1 : Analyser les Requêtes SQL**

```php
// Dans Tinker
// 1. Activer le log des requêtes
>>> DB::enableQueryLog()

// 2. Exécuter une requête simple
>>> App\Models\Livre::disponible()->get()

// 3. Voir la requête SQL générée
>>> DB::getQueryLog()

// 4. Requête avec relation
>>> DB::flushQueryLog()
>>> App\Models\Livre::with('category')->get()
>>> DB::getQueryLog()

// 5. Comparer avec lazy loading
>>> DB::flushQueryLog()
>>> $livres = App\Models\Livre::all()
>>> $livres->each(function($livre) { $livre->category; })
>>> count(DB::getQueryLog())
```

### **🔍 Étape 4.2 : Manipulation de Données**

```php
// 6. Créer une nouvelle catégorie temporaire
>>> $testCat = App\Models\Category::create([
    'nom' => 'Test Category',
    'description' => 'Catégorie de test',
    'couleur' => '#000000',
    'icone' => 'fas fa-test',
    'active' => true
]);
>>> $testCat->slug

// 7. Créer un livre lié à cette catégorie
>>> $testLivre = App\Models\Livre::create([
    'titre' => 'Livre de Test',
    'auteur' => 'Testeur',
    'category_id' => $testCat->id,
    'disponible' => true
]);

// 8. Vérifier la relation
>>> $testLivre->category->nom
>>> $testCat->livres->count()

// 9. Nettoyer les données de test
>>> $testLivre->delete()
>>> $testCat->delete()
```

---

## 📋 Validation et Synthèse

### **✅ Checklist de Validation**

**Structure et Données :**
- [ ] J'ai identifié toutes les tables de la base
- [ ] Je comprends les colonnes de chaque table
- [ ] J'ai vérifié que les données de seed sont présentes
- [ ] Les relations entre tables sont claires

**Modèles Eloquent :**
- [ ] Je sais accéder aux modèles via Tinker
- [ ] Les relations belongsTo et hasMany fonctionnent
- [ ] Je peux créer, lire, modifier des enregistrements
- [ ] Les scopes personnalisés sont opérationnels

**Requêtes et Performance :**
- [ ] Je maîtrise les requêtes Eloquent de base
- [ ] Je comprends la différence entre Eager et Lazy Loading
- [ ] Je peux analyser les requêtes SQL générées
- [ ] J'identifie les problèmes de performance potentiels

### **📊 Synthèse des Découvertes**

Complétez ce tableau avec vos observations :

| 📊 Élément | 📈 Quantité | 🔍 Observations |
|------------|-------------|-----------------|
| **Catégories** | ___ | Couleurs : ___, Actives : ___ |
| **Livres** | ___ | Disponibles : ___, Relations : ___ |
| **Utilisateurs** | ___ | Rôles : ___ |
| **Tables totales** | ___ | Contraintes : ___ |

### **❓ Questions de Réflexion**

1. **Architecture :** Pourquoi utilise-t-on des relations plutôt que de dupliquer les données ?
2. **Performance :** Dans quels cas le Eager Loading est-il indispensable ?
3. **Sécurité :** Quelles protections avez-vous observées dans les modèles ?
4. **Evolution :** Comment ajouteriez-vous une nouvelle relation (ex: auteurs) ?

---

## 🚀 Étapes Suivantes

Maintenant que vous maîtrisez la structure existante :

1. **🛠️ Créer vos migrations** → [04-TP-PRATIQUE-MIGRATIONS.md](04-TP-PRATIQUE-MIGRATIONS.md)
2. **💪 Exercices pratiques** → [05-TP-PRATIQUE-EXERCICES.md](05-TP-PRATIQUE-EXERCICES.md)
3. **🎯 Évaluation finale** → [06-EVALUATION-COMPETENCES.md](06-EVALUATION-COMPETENCES.md)

---

**🎉 Excellent travail ! Vous avez exploré avec succès la base de données BiblioTech.**

> 💡 **Conseil :** Gardez cette session Tinker ouverte, elle vous sera utile pour la suite !