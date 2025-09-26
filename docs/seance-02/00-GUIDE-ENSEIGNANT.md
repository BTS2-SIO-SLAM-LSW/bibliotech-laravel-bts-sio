# 🎤 Guide d'Utilisation - Présentation Séance 2

## 📽️ Support de Cours : Base de Données SQLite & Eloquent ORM

### 🎯 **Objectif du Support**
Ce support de présentation permet à l'enseignant de :
- Présenter les concepts clés de la séance 2
- Structurer le cours sur 3 heures
- Inclure des démonstrations live
- Guider les phases pratiques

---

## 🛠️ **Utilisation avec Marp**

### **Installation Marp CLI**
```bash
npm install -g @marp-team/marp-cli
```

### **Génération PDF/HTML**
```bash
# Générer en PDF
marp 00-PRESENTATION-SEANCE-02.md -o presentation-seance-02.pdf

# Générer en HTML
marp 00-PRESENTATION-SEANCE-02.md -o presentation-seance-02.html

# Mode présentation avec thème
marp 00-PRESENTATION-SEANCE-02.md --theme default --html
```

### **Extension VS Code**
- Installer **"Marp for VS Code"**
- Ouvrir `00-PRESENTATION-SEANCE-02.md`
- Utiliser `Ctrl+Shift+P` → "Marp: Open Preview"

---

## 📋 **Structure de la Présentation**

### **Durée Totale : 180 minutes**

| **Section** | **Durée** | **Slides** | **Objectif** |
|-------------|-----------|------------|--------------|
| **Introduction** | 10 min | 1-4 | Présenter objectifs et plan |
| **Concepts** | 30 min | 5-12 | Architecture BDD/ORM |
| **Démonstration** | 20 min | 13-14 | Live coding Tinker |
| **Phase Pratique** | 90 min | 15-16 | TPs guidés et autonomes |
| **CI/CD** | 15 min | 17 | Pipeline automatisé |
| **Évaluation** | 10 min | 18 | Modalités et critères |
| **Synthèse** | 5 min | 19-21 | Bilan et séance 3 |

---

## 🎬 **Points Clés pour l'Enseignant**

### **Slide 6 : Évolution Données** 
> 💡 **Astuce** : Montrer concrètement la différence entre les arrays statiques de la séance 1 et les modèles Eloquent

### **Slide 9 : Schema BDD**
> 🎯 **Focus** : Insister sur la relation one-to-many et les clés étrangères

### **Slide 14 : Démonstration Live**
> ⚡ **Important** : Préparer à l'avance une base avec quelques données pour la démo

### **Slide 16 : Organisation TP**
> 📋 **Conseil** : Distribuer les étudiants par niveau (binômes mixtes recommandés)

---

## 🧪 **Démonstration Live Recommandée**

### **Script de Démonstration (Slide 14)**
```bash
# 1. Vérifier l'état initial
php artisan migrate:status

# 2. Lancer Tinker
php artisan tinker

# 3. Explorer les données
>>> App\Models\Category::all()->pluck('nom')
>>> App\Models\Livre::count()

# 4. Créer un nouveau livre
>>> $livre = App\Models\Livre::create([
    'titre' => 'Nouveau Laravel 11',
    'auteur' => 'Expert Développeur',
    'category_id' => 1,
    'disponible' => true
]);

# 5. Tester la relation
>>> $livre->category->nom
>>> App\Models\Category::find(1)->livres()->count()
```

**⏰ Durée : 10-15 minutes maximum**

---

## 📱 **Modalités d'Évaluation (Slide 18)**

### **Évaluation Pratique : 45 minutes**
- **Format** : Sur machine individuel
- **Support** : Documentation Laravel autorisée
- **Outils** : Tinker, VS Code, terminal
- **Rendu** : Repository GitHub avec commits

### **Barème Détaillé**
| **Compétence** | **Points** | **Critères** |
|----------------|------------|--------------|
| Migrations | 4 pts | Structure correcte + contraintes |
| Modèles | 4 pts | Relations + fillable + casts |
| Requêtes | 4 pts | Eloquent + optimisation |
| Relations | 4 pts | belongsTo + hasMany fonctionnels |
| Performance | 4 pts | Eager loading + index |

---

## 🎓 **Conseils Pédagogiques**

### **✅ Bonnes Pratiques**
- **Varier les rythmes** : Théorie → Démo → Pratique
- **Questions fréquentes** : Vérifier la compréhension régulièrement
- **Support individuel** : Circuler pendant les TPs
- **Encourager Tinker** : Outil indispensable à maîtriser

### **⚠️ Points de Vigilance**
- **SQLite vs MySQL** : Bien expliquer les différences
- **Namespaces** : App\Models\ souvent oublié
- **Relations inverses** : belongsTo ≠ hasMany
- **Migration order** : Importance de l'ordre des migrations

---

## 🔧 **Préparation Technique**

### **Avant le Cours**
- [ ] Vérifier que tous les postes ont PHP 8.3+
- [ ] Cloner le repository sur chaque machine
- [ ] Tester `php artisan migrate:fresh --seed`
- [ ] Préparer backup des bases de données
- [ ] Vérifier les extensions VS Code

### **Matériel Nécessaire**
- 💻 Projecteur/écran pour la présentation
- 🌐 Connexion Internet (GitHub Actions)
- 📁 Repository cloné sur machines étudiants
- ⚡ Accès admin si problème d'extension PHP

---

## 📚 **Ressources Complémentaires**

### **Si Difficultés Techniques**
- **Plan B** : Utiliser SQLite Browser pour visualiser la base
- **Alternative Tinker** : phpMyAdmin pour SQLite (extension)
- **Debug migrations** : `php artisan migrate:status --verbose`

### **Pour Aller Plus Loin**
- Montrer les logs SQL : `DB::enableQueryLog()`
- Observer pattern avec Eloquent
- Factory et Faker pour données aléatoires

---

**🎉 Bonne présentation et excellente séance !**

> 💡 **Reminder** : La présentation est un support, l'essentiel reste l'interaction avec les étudiants et la pratique sur machine.