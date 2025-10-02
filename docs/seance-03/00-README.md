# 📝 Séance 3 — CRUD & Formulaires Laravel# 📝 Séance 3 — CRUD & Formulaires Laravel



**Durée :** 3 heures  **Durée :** 3 heures  

**Objectif :** Permettre d'ajouter, modifier, supprimer des livres dans l'application BiblioTech**Objectif :** Permettre d'ajouter, modifier, supprimer des livres dans l'application BiblioTech



## 🎯 Objectifs de la Séance## 🎯 Objectifs de la Séance



À l'issue de cette séance, vous serez capable de :À l'issue de cette séance, vous serez capable de :



- ✅ **Créer des formulaires HTML** pour saisir des données- ✅ **Créer des formulaires HTML** pour saisir des données

- ✅ **Implémenter les opérations CRUD** (Create, Read, Update, Delete)- ✅ **Implémenter les opérations CRUD** (Create, Read, Update, Delete)

- ✅ **Valider les données** côté serveur avec Laravel- ✅ **Valider les données** côté serveur avec Laravel

- ✅ **Afficher des messages** de succès et d'erreur- ✅ **Afficher des messages** de succès et d'erreur

- ✅ **Gérer l'intégrité des données** avec SQLite- ✅ **Gérer l'intégrité des données** avec SQLite



------



## 📚 Parcours Pédagogique Structuré## 📚 Parcours Pédagogique Structuré



### **1. Concepts Fondamentaux**### **1. Concepts Fondamentaux**

📖 **[01-CONCEPTS-CRUD.md](01-CONCEPTS-CRUD.md)**📖 **[01-CONCEPTS-CRUD.md](01-CONCEPTS-CRUD.md)**

- Qu'est-ce que le CRUD ?- Qu'est-ce que le CRUD ?

- Formulaires HTML et méthodes HTTP- Formulaires HTML et méthodes HTTP

- Validation des données- Validation des données

- Messages flash Laravel- Messages flash Laravel



### **2. Vocabulaire Technique**### **2. Vocabulaire Technique**

📝 **[02-GLOSSAIRE-FORMULAIRES.md](02-GLOSSAIRE-FORMULAIRES.md)**📝 **[02-GLOSSAIRE-FORMULAIRES.md](02-GLOSSAIRE-FORMULAIRES.md)**

- Terminologie CRUD- Terminologie CRUD

- Validation Laravel- Validation Laravel

- Routes resource- Routes resource

- Méthodes HTTP- Méthodes HTTP



### **3. Découverte Pratique**  ### **3. Découverte Pratique**  

🔍 **[03-DECOUVERTE-FORMULAIRES.md](03-DECOUVERTE-FORMULAIRES.md)**🔍 **[03-DECOUVERTE-FORMULAIRES.md](03-DECOUVERTE-FORMULAIRES.md)**

- Explorer les formulaires existants- Explorer les formulaires existants

- Analyser les routes resource- Analyser les routes resource

- Comprendre les contrôleurs- Comprendre les contrôleurs



### **4. TP Pratique : Créer un Formulaire**### **4. TP Pratique : Créer un Formulaire**

🛠️ **[04-TP-PRATIQUE-CRUD.md](04-TP-PRATIQUE-CRUD.md)**🛠️ **[04-TP-PRATIQUE-CRUD.md](04-TP-PRATIQUE-CRUD.md)**

- Créer le contrôleur LivreController- Créer le contrôleur LivreController

- Implémenter les méthodes CRUD- Implémenter les méthodes CRUD

- Créer les vues avec formulaires- Créer les vues avec formulaires

- Ajouter la validation- Ajouter la validation



### **5. TP Pratique : Exercices Complets**### **5. TP Pratique : Exercices Complets**

💻 **[05-TP-PRATIQUE-EXERCICES.md](05-TP-PRATIQUE-EXERCICES.md)**💻 **[05-TP-PRATIQUE-EXERCICES.md](05-TP-PRATIQUE-EXERCICES.md)**

- 5 modules d'exercices progressifs- 5 modules d'exercices progressifs

- Formulaires → Validation → Messages → Tests- Formulaires → Validation → Messages → Tests

- CRUD complet pour livres et catégories- CRUD complet pour livres et catégories

- Validation autonome des compétences- Validation autonome des compétences



### **6. Évaluation des Compétences**### **6. Évaluation des Compétences**

📊 **[06-EVALUATION-COMPETENCES.md](06-EVALUATION-COMPETENCES.md)**📊 **[06-EVALUATION-COMPETENCES.md](06-EVALUATION-COMPETENCES.md)**

- Tests de validation- Tests de validation

- Checklist des fonctionnalités- Checklist des fonctionnalités

- Critères d'évaluation- Critères d'évaluation



------



## 🎪 Guide d'Utilisation Rapide## 🎪 Guide d'Utilisation Rapide



### **📋 Pour les Débutants** (2h30)### **📋 Pour les Débutants** (2h30)

```bash```bash

1. Lire 01-CONCEPTS (20 min)1. Lire 01-CONCEPTS (20 min)

2. Lire 02-GLOSSAIRE (15 min)2. Lire 02-GLOSSAIRE (15 min)

3. Faire 03-DECOUVERTE (30 min)3. Faire 03-DECOUVERTE (30 min)

4. Faire 04-TP-PRATIQUE-CRUD (90 min)4. Faire 04-TP-PRATIQUE-CRUD (90 min)

5. Faire 06-EVALUATION (25 min)5. Faire 06-EVALUATION (25 min)

``````



### **🚀 Pour les Confirmés** (3h)### **🚀 Pour les Confirmés** (3h)

```bash```bash

1. Survoler 01-02 (10 min)1. Survoler 01-02 (10 min)

2. Faire 03-DECOUVERTE (20 min)2. Faire 03-DECOUVERTE (20 min)

3. Faire 04-TP-PRATIQUE-CRUD (60 min)3. Faire 04-TP-PRATIQUE-CRUD (60 min)

4. Faire 05-TP-PRATIQUE-EXERCICES (90 min)4. Faire 05-TP-PRATIQUE-EXERCICES (90 min)

5. Faire 06-EVALUATION (20 min)5. Faire 06-EVALUATION (20 min)

``````



------



## 🏗️ Structure CRUD des Livres## 🏗️ Structure CRUD des Livres



### **Routes Resource**### **Routes Resource**

```php```php

Route::resource('livres', LivreController::class);Route::resource('livres', LivreController::class);

``````



### **Méthodes du Contrôleur**### **Méthodes du Contrôleur**

- `index()` : Afficher la liste des livres- `index()` : Afficher la liste des livres

- `create()` : Afficher le formulaire de création- `create()` : Afficher le formulaire de création

- `store()` : Enregistrer un nouveau livre- `store()` : Enregistrer un nouveau livre

- `show($id)` : Afficher un livre spécifique- `show($id)` : Afficher un livre spécifique

- `edit($id)` : Afficher le formulaire de modification- `edit($id)` : Afficher le formulaire de modification

- `update($id)` : Mettre à jour un livre existant- `update($id)` : Mettre à jour un livre existant

- `destroy($id)` : Supprimer un livre- `destroy($id)` : Supprimer un livre



### **Vues Nécessaires**### **Vues Nécessaires**

- `livres/index.blade.php` : Liste des livres- `livres/index.blade.php` : Liste des livres

- `livres/create.blade.php` : Formulaire de création- `livres/create.blade.php` : Formulaire de création

- `livres/edit.blade.php` : Formulaire de modification- `livres/edit.blade.php` : Formulaire de modification

- `livres/show.blade.php` : Détail d'un livre- `livres/show.blade.php` : Détail d'un livre



------



## ✅ Validation Finale## ✅ Validation Finale



À la fin de cette séance, votre application doit permettre :À la fin de cette séance, votre application doit permettre :



1. **✅ Ajouter un nouveau livre** via formulaire1. **✅ Ajouter un nouveau livre** via formulaire

2. **✅ Modifier un livre existant** avec préremplissage2. **✅ Modifier un livre existant** avec préremplissage

3. **✅ Supprimer un livre** avec confirmation3. **✅ Supprimer un livre** avec confirmation

4. **✅ Valider les données** (titre obligatoire, etc.)4. **✅ Valider les données** (titre obligatoire, etc.)

5. **✅ Afficher des messages** de succès/erreur5. **✅ Afficher des messages** de succès/erreur

6. **✅ Navigation fluide** entre les pages6. **✅ Navigation fluide** entre les pages



------



## 🔗 Prérequis## 🔗 Prérequis



- ✅ Séance 1 terminée (routes et vues de base)- ✅ Séance 1 terminée (routes et vues de base)

- ✅ Séance 2 terminée (base de données SQLite)- ✅ Séance 2 terminée (base de données SQLite)

- ✅ Application BiblioTech fonctionnelle- ✅ Application BiblioTech fonctionnelle

- ✅ Modèles `Livre` et `Categorie` existants- ✅ Modèles `Livre` et `Categorie` existants



------



## 📞 Aide et Support## 📞 Aide et Support



- 📖 Consultez d'abord les **concepts** et le **glossaire**- 📖 Consultez d'abord les **concepts** et le **glossaire**

- 🔍 Utilisez la **découverte** pour comprendre l'existant- 🔍 Utilisez la **découverte** pour comprendre l'existant

- 💻 Suivez le **TP pratique** étape par étape- 💻 Suivez le **TP pratique** étape par étape

- 📊 Validez avec l'**évaluation** finale- 📊 Validez avec l'**évaluation** finale



**Bonne découverte du CRUD Laravel !** 🚀**Bonne découverte du CRUD Laravel !** 🚀