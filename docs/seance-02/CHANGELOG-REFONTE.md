# 🔄 Changelog - Refonte Séance 02

**Date :** 1er octobre 2025  
**Auteur :** Refonte pédagogique

---

## 📋 Modifications Apportées

### **1. Renommage des Fichiers**

#### **Anciens noms → Nouveaux noms**
```
03-TP-DECOUVERTE-DATABASE.md  → 03-DECOUVERTE-DATABASE.md
04-TP-MIGRATIONS.md           → 04-TP-PRATIQUE-MIGRATIONS.md
05-EXERCICES-PRATIQUES.md     → 05-TP-PRATIQUE-EXERCICES.md
```

### **2. Justification des Changements**

#### **Problème identifié :**
- ❌ Confusion entre "TP" et "Exercices"
- ❌ Le fichier 03 n'est pas vraiment un "TP" (c'est une découverte guidée)
- ❌ Le fichier 04 est un TP mais sans distinction claire avec le 05
- ❌ Le fichier 05 contient en fait 5 modules complets d'exercices (plus conséquent)

#### **Solution appliquée :**
- ✅ **03-DECOUVERTE** : Simple découverte exploratoire (pas de création)
- ✅ **04-TP-PRATIQUE-MIGRATIONS** : TP guidé pas à pas (création assistée)
- ✅ **05-TP-PRATIQUE-EXERCICES** : TP autonome avec 5 modules (création autonome)
- ✅ Distinction claire : **Guidé** vs **Autonome**

---

## 🎯 Nouvelle Structure Pédagogique

### **Progression Logique**
```
00 - README ......................... Index général
00 - ORGANISATION-PEDAGOGIQUE ....... Guide de navigation (NOUVEAU)

01-02 - THÉORIE .................... Concepts et glossaire
03 - DÉCOUVERTE .................... Observer sans créer
04 - TP GUIDÉ ...................... Créer avec assistance
05 - TP AUTONOME ................... Créer en autonomie (5 modules)
06 - ÉVALUATION .................... Valider les acquis
07-08 - AVANCÉ ..................... CI/CD et bonus
```

### **Clarification des Termes**

| Terme | Signification | Fichiers concernés |
|-------|---------------|-------------------|
| **DÉCOUVERTE** | Observer, explorer, comprendre | 03 |
| **TP PRATIQUE (Guidé)** | Créer avec code complet fourni | 04 |
| **TP PRATIQUE (Autonome)** | Créer avec indices uniquement | 05 |
| **ÉVALUATION** | Tester sans aide | 06 |

---

## 📝 Nouveaux Documents Créés

### **00-ORGANISATION-PEDAGOGIQUE.md**
**Objectif :** Aider les étudiants à comprendre la structure

**Contenu :**
- 📊 Vue d'ensemble de tous les documents
- 🤔 Différence entre les types de documents
- 🎓 Parcours pédagogiques recommandés (3h, 5h, 6h+)
- 📊 Tableau comparatif TP Guidé vs TP Autonome
- ✅ Checklist de validation de compréhension

**Public cible :**
- Étudiants perdus dans la structure
- Enseignants pour expliquer le parcours
- Nouveaux arrivants

---

## 🔄 Mises à Jour des Références

### **Fichiers modifiés :**
1. ✅ `00-README.md` - Ajout lien vers ORGANISATION-PEDAGOGIQUE + mise à jour des liens
2. ✅ `03-DECOUVERTE-DATABASE.md` - Mise à jour liens de navigation
3. ✅ `04-TP-PRATIQUE-MIGRATIONS.md` - Nouveau titre + liens de navigation
4. ✅ `05-TP-PRATIQUE-EXERCICES.md` - Nouveau titre + clarification objectifs

### **Tous les liens internes mis à jour :**
- ✅ Références croisées entre documents cohérentes
- ✅ Navigation "Étapes suivantes" actualisée
- ✅ Aucun lien mort

---

## 🎨 Amélioration de la Lisibilité

### **Avant (exemple README) :**
```markdown
### **3. Découverte Pratique**  
🔍 **[03-TP-DECOUVERTE-DATABASE.md]**
```

### **Après :**
```markdown
### **3. Découverte Pratique**  
🔍 **[03-DECOUVERTE-DATABASE.md]**
- Explorer la structure SQLite
- Naviguer avec Tinker
- [Description claire des activités]
```

---

## 📊 Impact sur l'Expérience Étudiante

### **Avant la refonte :**
- ❓ "C'est quoi la différence entre TP-DECOUVERTE et EXERCICES-PRATIQUES ?"
- ❓ "Je fais lequel en premier ?"
- ❓ "Les exercices c'est pareil qu'un TP ?"

### **Après la refonte :**
- ✅ "Je sais que 03 c'est juste observer"
- ✅ "Je sais que 04 est guidé et 05 est autonome"
- ✅ "Je peux choisir mon parcours selon mon niveau"

---

## 🎯 Cohérence avec Séance 01

### **Séance 01 (référence) :**
```
03-TP-DECOUVERTE-APP.md
04-TP-ROUTES-SIMPLES.md
05-EXERCICES-PRATIQUES.md
```

### **Séance 02 (alignée) :**
```
03-DECOUVERTE-DATABASE.md
04-TP-PRATIQUE-MIGRATIONS.md
05-TP-PRATIQUE-EXERCICES.md
```

**Note :** La séance 01 pourrait bénéficier du même renommage pour harmoniser :
- `03-TP-DECOUVERTE-APP.md` → `03-DECOUVERTE-APP.md`
- `04-TP-ROUTES-SIMPLES.md` → `04-TP-PRATIQUE-ROUTES.md`
- `05-EXERCICES-PRATIQUES.md` → `05-TP-PRATIQUE-EXERCICES.md`

---

## ✅ Validation des Changements

### **Checklist Technique :**
- [x] Fichiers renommés correctement
- [x] Tous les liens internes mis à jour
- [x] Aucun lien mort
- [x] Structure de navigation cohérente
- [x] Document d'organisation créé
- [x] README mis à jour

### **Checklist Pédagogique :**
- [x] Progression logique claire
- [x] Distinction TP Guidé / TP Autonome
- [x] Parcours recommandés définis
- [x] Niveaux de difficulté explicites
- [x] Durées estimées indiquées
- [x] Auto-évaluation possible

---

## 🚀 Prochaines Étapes Recommandées

### **Pour les enseignants :**
1. ✅ Présenter `00-ORGANISATION-PEDAGOGIQUE.md` en début de séance
2. ✅ Guider les étudiants vers le bon parcours selon leur niveau
3. ✅ Utiliser les durées estimées pour planifier la séance

### **Pour les étudiants :**
1. ✅ Lire `00-ORGANISATION-PEDAGOGIQUE.md` avant de commencer
2. ✅ Choisir son parcours (Standard, Complet, Avancé)
3. ✅ Suivre la progression recommandée

### **Pour le projet :**
1. 🔄 Appliquer le même renommage à la Séance 01 (optionnel)
2. 🔄 Créer `00-ORGANISATION-PEDAGOGIQUE.md` pour Séance 01
3. 🔄 Harmoniser toutes les séances futures avec cette nomenclature

---

## 📚 Résumé des Bénéfices

### **Clarté ✅**
- Noms de fichiers explicites
- Rôle de chaque document clair
- Navigation facilitée

### **Progression ✅**
- Découverte → TP Guidé → TP Autonome → Évaluation
- Difficulté progressive
- Parcours adaptés au niveau

### **Autonomie ✅**
- Document d'organisation pour se repérer
- Validation personnelle possible
- Défis bonus pour approfondir

---

**✨ Refonte terminée avec succès !**

> 💡 **Note :** Ce changelog peut servir de référence pour les futures séances.
