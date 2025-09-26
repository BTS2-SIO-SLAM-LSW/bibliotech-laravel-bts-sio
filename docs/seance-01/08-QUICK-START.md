# ⚡ Démarrage Ultra-Rapide BiblioTech - Séance 1# ⚡ Démarrage Ultra-Rapide BiblioTech - Séance 1



> **🎯 Objectif :** Avoir l'application Laravel fonctionnelle en moins de 5 minutes> **🎯 Objectif :** Avoir l'application Laravel fonctionnelle en moins de 5 minutes



------



## 🚀 2 Méthodes au Choix## 🚀 2 Méthodes au Choix



### 🌟 **Méthode 1 : GitHub Codespace (Recommandé)**### 🌟 **Méthode 1 : GitHub Codespace (Recommandé)**



**✨ Parfait pour : Débutants, formation, démonstration****✨ Parfait pour : Débutants, formation, démonstration**



1. **Aller sur :** [GitHub Repository](https://github.com/ggaillard/bibliotech-laravel-bts-sio)1. **Aller sur :** [GitHub Repository](https://github.com/ggaillard/bibliotech-laravel-bts-sio)

2. **Cliquer sur** "Code" > "Codespaces" > "Create codespace"2. **Cliquer sur** "Code" > "Codespaces" > "Create codespace"

3. **Attendre 2-3 minutes** que VS Code se charge automatiquement3. **Attendre 2-3 minutes** que VS Code se charge automatiquement

4. **Le setup s'exécute automatiquement** (installation, configuration, base SQLite)4. **Le setup s'exécute automatiquement** (installation, configuration, base SQLite)

5. **Cliquer sur "PORTS"** en bas de VS Code5. **Cliquer sur "PORTS"** en bas de VS Code

6. **Cliquer sur 🌐** à côté du port 80006. **Cliquer sur 🌐** à côté du port 8000

7. **🎉 Terminé !** Votre application Laravel fonctionne7. **🎉 Terminé !** Votre application Laravel fonctionne



### 🏠 **Méthode 2 : Installation Locale**### 🏠 **Méthode 2 : Installation Locale**



**✨ Parfait pour : Développeurs, travail hors ligne****✨ Parfait pour : Développeurs, travail hors ligne**



**Prérequis :** PHP 8.3+, Composer, Node.js 18+**Prérequis :** PHP 8.3+, Composer, Node.js 18+



```bash```bash

# 1. Cloner le projet# 1. Cloner le projet

git clone https://github.com/ggaillard/bibliotech-laravel-bts-sio.gitgit clone https://github.com/ggaillard/bibliotech-laravel-bts-sio.git

cd bibliotech-laravel-bts-siocd bibliotech-laravel-bts-sio



# 2. Installation rapide avec script# 2. Installation rapide avec script

.\scripts\install.bat.\scripts\install.bat



# 3. Démarrage# 3. Démarrage

.\scripts\start-simple.bat.\scripts\start-simple.bat



# 4. Accéder à : http://localhost:8000# 4. Accéder à : http://localhost:8000

``````



------



## ✅ Vérification Rapide## ✅ Vérification Rapide



### **Test en 30 secondes**### **Test en 30 secondes**



```bash```bash

# Vérifier les versions# Vérifier les versions

php artisan --versionphp artisan --version

php artisan route:listphp artisan route:list



# Vérifier la base SQLite# Vérifier la base SQLite

php artisan migrate:statusphp artisan migrate:status

``````



**Vous devriez voir :****Vous devriez voir :**

``````

✅ Laravel Framework 11.31.1✅ Laravel Framework 11.31.1

✅ Application accessible sur port 8000✅ Application accessible sur port 8000

✅ Base SQLite configurée (database/database.sqlite)✅ Base SQLite configurée (database/database.sqlite)

✅ Routes web fonctionnelles✅ Routes web fonctionnelles

✅ Vues Blade rendues correctement✅ Vues Blade rendues correctement

``````



### **Test Navigation - Séance 1**### **Test Navigation - Séance 1**



1. **Page d'accueil** (`/`) : Présentation BiblioTech avec statistiques1. **Page d'accueil** (`/`) : Présentation BiblioTech avec statistiques

2. **À propos** (`/about`) : Informations techniques du projet2. **À propos** (`/about`) : Informations techniques du projet

3. **Catalogue** (`/livres`) : Liste des livres (données en dur pour séance 1)3. **Catalogue** (`/livres`) : Liste des livres (données en dur pour séance 1)

4. **Détail livre** (`/livre/1`) : Affichage détaillé d'un livre4. **Détail livre** (`/livre/1`) : Affichage détaillé d'un livre

5. **Page de test** (`/test`) : Vérification du fonctionnement5. **Page de test** (`/test`) : Vérification du fonctionnement



**✅ Si toutes les pages s'affichent → Séance 1 opérationnelle !****✅ Si toutes les pages s'affichent → Séance 1 opérationnelle !**



------



## 🌐 URLs Importantes## 🌐 URLs Importantes



### **GitHub Codespace**### **GitHub Codespace**

- **Application** : Onglet PORTS → 🌐 port 8000- **Application** : Onglet PORTS → 🌐 port 8000

- **Terminal** : Intégré VS Code- **Terminal** : Intégré VS Code

- **Repository** : [GitHub - Bibliotech Laravel BTS SIO](https://github.com/ggaillard/bibliotech-laravel-bts-sio)- **Repository** : [GitHub - Bibliotech Laravel BTS SIO](https://github.com/ggaillard/bibliotech-laravel-bts-sio)



### **Installation Locale**### **Installation Locale**

- **Application** : http://localhost:8000- **Application** : http://localhost:8000

- **Laravel Logs** : `storage/logs/laravel.log`- **Laravel Logs** : `storage/logs/laravel.log`

- **Database SQLite** : `database/database.sqlite`- **Database SQLite** : `database/database.sqlite`



------



## 🛠 Commandes Essentielles - Séance 1## 🛠 Commandes Essentielles - Séance 1



### **Gestion Application**### **Gestion Application**

```bash```bash

php artisan serve          # 🚀 Démarrer serveur local (port 8000)php artisan serve          # 🚀 Démarrer serveur local (port 8000)

php artisan route:list     # 📋 Voir toutes les routesphp artisan route:list     # � Voir toutes les routes

php artisan --version      # ✅ Vérifier version Laravelphp artisan --version      # ✅ Vérifier version Laravel

``````



### **Scripts Windows (si installés)**### **Scripts Windows (si installés)**

```bash```bash

.\scripts\start-simple.bat    # 🚀 Démarrer.\scripts\start-simple.bat    # � Démarrer

.\scripts\diagnostic.bat      # 🔍 Diagnostic complet.\scripts\diagnostic.bat      # � Diagnostic complet

``````



### **Laravel Artisan Utiles**### **Laravel Artisan Utiles**

```bash```bash

php artisan tinker         # 🐚 Console interactive PHPphp artisan tinker         # 🐚 Console interactive PHP

php artisan config:clear   # 🔄 Vider cache configphp artisan config:clear   # 🔄 Vider cache config

php artisan view:clear     # 🔄 Vider cache vuesphp artisan view:clear     # 🔄 Vider cache vues

``````



------



## 🚨 Problèmes Fréquents - Séance 1## 🚨 Problèmes Fréquents - Séance 1



### **GitHub Codespace**### **GitHub Codespace**



**❌ Application ne se charge pas :****❌ Application ne se charge pas :**

```bash```bash

# Vérifier le serveur Laravel# Vérifier le serveur Laravel

php artisan serve --host=0.0.0.0 --port=8000php artisan serve --host=0.0.0.0 --port=8000



# Vérifier les routes# Vérifier les routes

php artisan route:listphp artisan route:list

``````



**❌ Port 8000 non visible :****❌ Port 8000 non visible :**

- Vérifier onglet "PORTS" en bas de VS Code- Vérifier onglet "PORTS" en bas de VS Code

- Cliquer sur 🌐 à côté du port 8000- Cliquer sur 🌐 à côté du port 8000

- Actualiser le navigateur après quelques secondes- Actualiser le navigateur après quelques secondes



### **Installation Locale**### **Installation Locale**



**❌ `php artisan serve` ne fonctionne pas :****❌ `php artisan serve` ne fonctionne pas :**

```bash```bash

# Vérifier PHP# Vérifier PHP

php --version  # Doit être ≥ 8.3php --version  # Doit être ≥ 8.3



# Vérifier les dépendances# Vérifier les dépendances

composer installcomposer install



# Si problème avec .env# Si problème avec .env

cp .env.example .envcp .env.example .env

php artisan key:generatephp artisan key:generate

``````



**❌ Port 8000 déjà utilisé :****❌ Port 8000 déjà utilisé :**

```bash```bash

# Utiliser un autre port# Utiliser un autre port

php artisan serve --port=8001php artisan serve --port=8001



# Ou voir qui utilise le port 8000# Ou voir qui utilise le port 8000

netstat -ano | findstr :8000netstat -ano | findstr :8000

``````



**❌ Erreurs de permissions (Windows) :****❌ Erreurs de permissions (Windows) :**

```bash```bash

# Exécuter PowerShell en tant qu'Administrateur# Exécuter PowerShell en tant qu'Administrateur

# Puis relancer les commandes d'installation# Puis relancer les commandes d'installation

``````



------



## 📚 Étapes Suivantes - Séance 1## 📚 Étapes Suivantes



### **Immédiatement**### **Immédiatement**

1. **✅ Vérifier** que l'application fonctionne sur toutes les pages1. **✅ Vérifier** que l'application fonctionne

2. **🎮 Explorer** l'interface : accueil, à propos, catalogue, détails2. **🎮 Explorer** toutes les pages (accueil, catalogue, recherche)

3. **📖 Lire** [Vue d'ensemble Séance 1](00-README.md)3. **📖 Lire** [Guide Séance 1](seance-01/README.md)



### **Pour Apprendre**### **Pour Apprendre**

1. **🧠 Comprendre** l'[architecture MVC](01-CONCEPTS-MVC.md)1. **💪 Faire** les [exercices pratiques](seance-01/EXERCICES.md)

2. **📝 Étudier** le [glossaire Laravel](02-GLOSSAIRE-LARAVEL.md)2. **🧠 Comprendre** les [concepts MVC](seance-01/CONCEPTS.md)

3. **🔍 Découvrir** l'[application en détail](03-TP-DECOUVERTE-APP.md)3. **📝 Tester** avec l'[auto-évaluation](seance-01/EVALUATION.md)

4. **🛣️ Pratiquer** le [routing](04-TP-ROUTES-SIMPLES.md)

### **Si Problème**

### **Pour Valider**1. **🔍 Diagnostiquer** avec `make check`

1. **💪 Faire** les [exercices pratiques](05-EXERCICES-PRATIQUES.md)2. **📖 Consulter** [Guide Dépannage](TROUBLESHOOTING.md)

2. **🎯 Tester** avec l'[évaluation des compétences](06-EVALUATION-COMPETENCES.md)3. **💬 Demander** de l'aide sur [GitHub Discussions](../../discussions)



### **Si Problème**---

1. **🔍 Consulter** [Guide Dépannage](../TROUBLESHOOTING.md)

2. **💬 Voir** [GitHub Issues](https://github.com/ggaillard/bibliotech-laravel-bts-sio/issues)## 🚀 Installation & Démarrage universelle



---Utilisez les scripts suivants pour installer et démarrer le projet, quel que soit l'environnement :



**🚀 Prêt ? L'aventure Laravel Séance 1 commence maintenant !**```bash

bash scripts/install.sh      # Installation automatique

> 💡 **Conseil débutant :** Commencez par GitHub Codespace, c'est le plus simple et ça élimine tous les problèmes d'installation.bash scripts/start.sh        # Démarrage du serveur Laravel
bash scripts/check.sh        # Diagnostic (optionnel)
```
- L’URL d’accès est affichée à la fin du démarrage (onglet PORTS ou https://CODESPACE_NAME-8000.app.github.dev).

**Remarques :**
- Le script `install.sh` détecte automatiquement l’environnement (Codespace, Docker, local) et configure tout.
- Le script `start.sh` attend la base de données, lance le serveur Laravel et affiche l’URL d’accès.
- Pour vérifier l’installation, utilisez `bash scripts/check.sh`.

---

**🚀 Prêt ? Choisissez votre méthode et commencez l'aventure Laravel !**

> 💡 **Conseil débutant :** Commencez par GitHub Codespace, c'est le plus simple et ça élimine tous les problèmes d'installation.
