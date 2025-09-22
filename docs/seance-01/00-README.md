# 📚 Séance 1 — Fondations Laravel & Docker

Bienvenue dans la première séance du parcours **BiblioTech BTS SIO SLAM**. Vous trouverez ici tous les supports et exercices pour démarrer avec Laravel, Docker et GitHub Codespaces.

---

## 🎯 Objectifs de la Séance

À l'issue de cette séance, vous serez capable de :

- ✅ **Comprendre l'architecture MVC** et son implémentation dans Laravel
- ✅ **Naviguer dans la structure** d'un projet Laravel
- ✅ **Créer et gérer des routes** simples et paramétrées
- ✅ **Développer des contrôleurs** avec logique métier
- ✅ **Utiliser le moteur de templates Blade** avec héritage
- ✅ **Maîtriser l'environnement Docker** et GitHub Codespaces
- ✅ **Déboguer une application Laravel** avec les outils intégrés

---

## 📂 Sommaire de la Séance

### **1. Concepts Clés**
📖 **[01-CONCEPTS-MVC.md](01-CONCEPTS-MVC.md)**
- Architecture Model-View-Controller expliquée
- Flux des données dans Laravel
- Rôle de chaque composant MVC
- Bonnes pratiques d'organisation

### **2. Glossaire**
📖 **[02-GLOSSAIRE-LARAVEL.md](02-GLOSSAIRE-LARAVEL.md)**
- Terminologie Laravel essentielle
- Définitions des concepts techniques
- Références rapides pour le développement

### **3. TP Découverte**
🎮 **[03-TP-DECOUVERTE-APP.md](03-TP-DECOUVERTE-APP.md)**
- Premier contact avec l'application BiblioTech
- Exploration de l'interface utilisateur
- Compréhension du fonctionnement global
- Analyse de la structure des pages

### **4. TP Routes Simples**
🛣️ **[04-TP-ROUTES-SIMPLES.md](04-TP-ROUTES-SIMPLES.md)**
- Création de routes basiques
- Routes avec paramètres
- Routes nommées et redirection
- Gestion des erreurs 404

### **5. Exercices Pratiques**
💪 **[05-EXERCICES-PRATIQUES.md](05-EXERCICES-PRATIQUES.md)**
- 5 exercices progressifs guidés
- Mise en pratique des concepts appris
- Développement de nouvelles fonctionnalités
- Solutions détaillées et expliquées

### **6. Grille d'Évaluation**
✅ **[06-EVALUATION-COMPETENCES.md](06-EVALUATION-COMPETENCES.md)**
- Auto-évaluation des compétences acquises
- Critères de validation par niveau
- Préparation à l'évaluation formative

---

## 🚀 Avant de Commencer

### **✅ Prérequis Techniques**

Assurez-vous que votre environnement de développement est opérationnel :

**GitHub Codespace :**
1. Votre Codespace BiblioTech est créé et actif
2. L'application est accessible via l'onglet PORTS (port 8000)
3. Tous les services sont fonctionnels

**Installation Locale :**
1. Docker Desktop est installé et fonctionne
2. Le projet a été cloné et configuré
3. L'application est accessible sur http://localhost:8000

### **🔍 Test de Vérification**

```bash
# Vérification complète de l'environnement
make check
```

**Résultat attendu :**
```
✅ Application Laravel (port 8000)
✅ MailHog (port 8025)
✅ PostgreSQL (port 5432)
✅ Laravel 11.x fonctionnel
✅ Routes configurées
```

---

## 📚 Progression Pédagogique

### **🎯 Phase 1 : Découverte (45 min)**
1. **Lire** les concepts MVC (01-CONCEPTS-MVC.md)
2. **Consulter** le glossaire pour se familiariser avec le vocabulaire
3. **Réaliser** le TP de découverte de l'application

### **🎯 Phase 2 : Pratique Guidée (90 min)**
1. **Suivre** le TP sur les routes simples
2. **Expérimenter** avec différents types de routes
3. **Comprendre** le lien entre routes, contrôleurs et vues

### **🎯 Phase 3 : Exercices Autonomes (60 min)**
1. **Réaliser** les 5 exercices pratiques
2. **Tester** chaque solution avant de passer au suivant
3. **Comparer** vos solutions avec les corrections fournies

### **🎯 Phase 4 : Évaluation (15 min)**
1. **Compléter** la grille d'auto-évaluation
2. **Identifier** les points à approfondir
3. **Préparer** les questions pour le formateur

---

## 🛠 Outils et Ressources

### **Commandes Essentielles**
```bash
# Gestion de l'application
make start          # Démarrer l'environnement
make stop           # Arrêter l'environnement
make check          # Vérifier l'installation
make logs           # Voir les logs en temps réel

# Développement Laravel
php artisan route:list      # Lister toutes les routes
php artisan tinker         # Console interactive Laravel
php artisan --help         # Aide des commandes Artisan
```

### **Extensions VS Code Recommandées**
- **Laravel Blade** : Coloration syntaxique des templates
- **PHP Intelephense** : Auto-complétion PHP avancée
- **Laravel Snippets** : Raccourcis de code Laravel

### **Ressources Externes**
- [Documentation Laravel 11.x](https://laravel.com/docs/11.x)
- [Guide Blade Templates](https://laravel.com/docs/11.x/blade)
- [Routing Laravel](https://laravel.com/docs/11.x/routing)

---

## 📱 Structure de l'Application BiblioTech

### **Architecture Actuelle (Séance 1)**
```
BiblioTech/
├── 📁 app/Http/Controllers/
│   ├── HomeController.php      # Page d'accueil
│   └── BookController.php      # Gestion des livres
├── 📁 resources/views/
│   ├── layouts/app.blade.php   # Template principal
│   ├── welcome.blade.php       # Page d'accueil
│   └── books/                  # Vues des livres
├── 📁 routes/
│   └── web.php                 # Définition des routes
└── 📁 public/
    └── index.php               # Point d'entrée
```

### **Fonctionnalités Disponibles**
- 🏠 **Page d'accueil** : Présentation et statistiques
- 📖 **Catalogue** : Liste des livres disponibles
- 🔍 **Recherche** : Recherche par titre ou auteur
- 📄 **Détail livre** : Informations complètes d'un livre

---

## 🔧 Dépannage Rapide

### **Problèmes Courants**

**❌ Application inaccessible :**
```bash
make check          # Diagnostic complet
make restart        # Redémarrage des services
```

**❌ Erreur 500 sur une page :**
```bash
tail -f storage/logs/laravel.log    # Voir les erreurs
php artisan config:clear            # Nettoyer le cache
```

**❌ Modifications non visibles :**
```bash
php artisan view:clear       # Nettoyer le cache des vues
php artisan config:clear     # Nettoyer le cache de config
```

### **Obtenir de l'Aide**

1. **🔍 Consulter** les logs : `make logs`
2. **📖 Relire** la documentation de la séance
3. **💬 Poser une question** via GitHub Issues
4. **🤝 Collaborer** avec vos collègues

---

## 📞 Support et Questions

### **Templates GitHub Issues**

Pour toute question ou problème, utilisez les templates GitHub dans `.github/ISSUE_TEMPLATE/` du projet :

- **🐛 Bug Report** : Signaler un dysfonctionnement technique
- **❓ Question Séance** : Poser une question pédagogique
- **💡 Suggestion** : Proposer une amélioration

### **Canaux de Communication**

- **GitHub Issues** : Questions techniques et bugs
- **GitHub Discussions** : Échanges entre étudiants

---

## 🎯 Critères de Réussite

### **Niveau Débutant (Découverte)**
- [ ] Je comprends le principe MVC
- [ ] Je sais naviguer dans l'application
- [ ] Je reconnais une route, un contrôleur, une vue
- [ ] J'ai terminé le TP de découverte

### **Niveau Intermédiaire (Application)**
- [ ] Je crée des routes simples et paramétrées
- [ ] J'écris des méthodes de contrôleur fonctionnelles
- [ ] J'utilise Blade avec des variables et directives
- [ ] J'ai terminé le TP routes et 3 exercices minimum

### **Niveau Avancé (Maîtrise)**
- [ ] Je structure une application MVC complète
- [ ] J'utilise l'héritage Blade efficacement
- [ ] Je gère les erreurs et la validation
- [ ] J'ai terminé tous les exercices avec créativité

---

## 📅 Préparation Séance 2

### **Prérequis pour la Suite**
- ✅ Maîtrise des concepts MVC
- ✅ Aisance avec les routes Laravel
- ✅ Compréhension de Blade
- ✅ Environnement Docker fonctionnel

### **Aperçu Séance 2 : Base de Données + CI/CD**
- 🗄️ Migrations et modèles Eloquent
- 📊 Relations entre données
- 🔄 Tests automatisés
- 🚀 Intégration continue avec GitHub Actions

---

**🎉 Bonne découverte de Laravel avec BiblioTech !**

> 💡 **Conseil** : Prenez le temps de bien comprendre chaque concept avant de passer au suivant. La solidité de vos bases déterminera votre progression dans les séances suivantes.
