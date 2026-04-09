# Linkretz - Agence de Voyages

Application web complète pour l'agence de voyages familiale **Linkretz**, située à Chantilly. Elle offre une vitrine multilingue, la gestion des employés, des tour-opérateurs, des promotions et des demandes d'information clients.

&nbsp;

## 📋 Table des matières

- [Description](#-description)
- [Technologies](#️-technologies)
- [Fonctionnalités](#-fonctionnalités)
- [Prérequis](#-prérequis)
- [Installation](#-installation)
- [Structure du projet](#-structure-du-projet)
- [Guide d'utilisation](#-guide-dutilisation)
- [Sécurité](#-sécurité)
- [Contributeurs](#-contributeurs)

&nbsp;

## 📖 Description

Linkretz est le site vitrine et l'outil de gestion interne d'une agence de voyages familiale spécialisée dans les forfaits tour-opérateurs. L'application propose aux visiteurs de consulter les tour-opérateurs partenaires, de contacter les commerciaux et de soumettre des demandes d'information. Côté back-office, les administrateurs gèrent les employés, les tour-opérateurs et les promotions, tandis que les employés consultent les demandes clients et l'annuaire interne.

&nbsp;

## 🛠️ Technologies

| Composant | Technologie |
|---|---|
| **Back-end** | PHP 8 |
| **Base de données** | MySQL / MariaDB (PDO) |
| **Front-end** | HTML5 / CSS3 / JavaScript |
| **Envoi d'e-mails** | PHPMailer (SMTP) |
| **Variables d'environnement** | vlucas/phpdotenv |
| **Gestion de dépendances** | Composer |
| **Multilingue** | Système de traduction côté client (8 langues) |

&nbsp;

## ✨ Fonctionnalités

### Vitrine publique

- ✅ Présentation de l'agence et de ses services
- ✅ Horaires d'ouverture dynamiques (bilingue)
- ✅ Annuaire des commerciaux à contacter
- ✅ Catalogue des tour-opérateurs partenaires avec spécialités
- ✅ Formulaire de demande d'information client
- ✅ Traduction multilingue (FR, EN, ES, PT, IT, DE, ZH, TR)

&nbsp;

### Espace Administration

- ✅ Gestion complète des employés (CRUD)
- ✅ Gestion complète des tour-opérateurs (CRUD)
- ✅ Gestion des promotions
- ✅ Attribution des rôles (Employé / Administrateur)

&nbsp;

### Espace Employé

- ✅ Consultation de l'annuaire des employés
- ✅ Consultation des demandes d'information clients

&nbsp;

### Authentification & Sécurité

- ✅ Connexion par identifiant / mot de passe
- ✅ Changement de mot de passe obligatoire à la première connexion
- ✅ Réinitialisation par e-mail avec token sécurisé (expiration 1h)
- ✅ Contrôle d'accès par rôle (Admin / Employé)

&nbsp;

## 📦 Prérequis

- PHP 8.0 ou supérieur
- MySQL 8.0 / MariaDB 10.4 ou supérieur
- Composer
- Serveur web (Apache / Nginx)

&nbsp;

## 🚀 Installation

### 1. Cloner le dépôt

```bash
git clone https://github.com/aslyxlenny/linkretz.git
cd linkretz
```

### 2. Installer les dépendances

```bash
cd include
composer install
```

### 3. Configurer l'environnement

Copier le fichier d'exemple et renseigner les valeurs :

```bash
cp .env.example .env
```

Remplir les variables dans `.env` :

| Variable | Description |
|---|---|
| `DB_HOST` | Adresse du serveur MySQL |
| `DB_USER` | Utilisateur de la base de données |
| `DB_PASS` | Mot de passe de la base de données |
| `DB_NAME` | Nom de la base de données |
| `SMTP_HOST` | Serveur SMTP |
| `SMTP_PORT` | Port SMTP (465 par défaut) |
| `SMTP_USER` | Identifiant SMTP |
| `SMTP_PASS` | Mot de passe SMTP |
| `SMTP_ENCRYPTION` | Type de chiffrement (`ssl` ou `tls`) |
| `SMTP_FROM` | Adresse e-mail d'expédition |
| `SMTP_FROM_NAME` | Nom affiché pour l'expéditeur |
| `APP_URL` | URL de base de l'application |

### 4. Importer la base de données

Importer le fichier SQL fourni dans votre SGBD MySQL.

### 5. Lancer le serveur

```bash
php -S localhost:8000
```

&nbsp;

## 📁 Structure du projet

```
Linkretz/
├── index.php                          # Page d'accueil
├── .env.example                       # Modèle de configuration
├── css/
│   └── style.css                      # Feuille de style principale
│
├── js/                                # Scripts côté client
│   ├── Traduction.js                  # Système de traduction multilingue
│   ├── ControleFormulaireDemande.js   # Validation formulaire de demande
│   ├── ControleFormulaireEmploye.js   # Validation formulaire employé
│   ├── ControleFormulaireMdp.js       # Validation changement de mot de passe
│   ├── ControleFormulairePromotion.js # Validation formulaire promotion
│   ├── ControleFormulaireTourOperateur.js  # Validation formulaire tour-opérateur
│   ├── ControleSuppressionEmploye.js  # Confirmation suppression employé
│   ├── ControleSuppressionPromotion.js  # Confirmation suppression promotion
│   └── ControleSuppressionTourOperateur.js  # Confirmation suppression tour-opérateur
│
├── include/                           # Composants PHP partagés
│   ├── connexion_bd.php               # Connexion PDO à la base de données
│   ├── deconnexion.php                # Déconnexion et destruction de session
│   ├── sec_admin.php                  # Contrôle d'accès administrateur
│   ├── sec_employ.php                 # Contrôle d'accès employé
│   ├── header.html                    # En-tête HTML
│   ├── footer.html                    # Pied de page HTML
│   ├── menu_admin.php                 # Navigation administrateur
│   ├── menu_employe.php               # Navigation employé
│   ├── menu_client.html               # Navigation visiteur
│   ├── employe_composant.php          # Composant formulaire employé
│   ├── promotion_composant.php        # Composant formulaire promotion
│   ├── tour_operateur_composant.php   # Composant formulaire tour-opérateur
│   └── vendor/                        # Dépendances Composer
│
└── page/
    ├── connexion.php                  # Page de connexion
    ├── demande_info_client.php        # Formulaire de demande d'info
    ├── employe_consult_client.php     # Liste des commerciaux (public)
    ├── tour_operateur_consult_client.php # Catalogue tour-opérateurs (public)
    ├── mentions_legales.php           # Mentions légales
    └── administration/
        ├── admin/
        │   ├── gestion_employe.php        # Liste des employés (admin)
        │   ├── gestion_tour_operateur.php # Liste des tour-opérateurs (admin)
        │   ├── add/                       # Formulaires d'ajout
        │   ├── edit/                      # Formulaires de modification
        │   ├── delete/                    # Scripts de suppression
        │   └── panel/                     # Tableau de bord admin
        ├── employe/
        │   ├── employe_consult_demande_info.php  # Demandes d'info (employé)
        │   └── employe_consult_employe.php        # Annuaire (employé)
        └── password/
            ├── forgot_password.php    # Mot de passe oublié
            └── reset_password.php     # Réinitialisation du mot de passe
```

&nbsp;

## 📖 Guide d'utilisation

### Visiteur (Client)

1. Accédez à la page d'accueil pour consulter les informations de l'agence
2. Parcourez le catalogue des tour-opérateurs partenaires
3. Consultez la liste des commerciaux pour prendre contact
4. Remplissez le formulaire de demande d'information
5. Changez la langue via les drapeaux dans l'en-tête

&nbsp;

### Employé

1. Connectez-vous via la page de connexion
2. Changez votre mot de passe si c'est votre première connexion
3. Consultez l'annuaire interne des employés
4. Consultez les demandes d'information reçues

&nbsp;

### Administrateur

1. Connectez-vous avec un compte administrateur
2. Accédez au panel d'administration
3. Gérez les employés : ajout, modification, suppression, attribution de rôle
4. Gérez les tour-opérateurs : ajout, modification, suppression
5. Gérez les promotions en cours

&nbsp;

## 🔐 Sécurité

- Mots de passe hashés avec `password_hash()` (Bcrypt)
- Requêtes préparées PDO (protection contre les injections SQL)
- Échappement des sorties HTML avec `htmlspecialchars()` (protection XSS)
- Contrôle d'accès par rôle sur chaque page protégée
- Régénération de session à la connexion
- Cookies sécurisés : `HttpOnly`, `Secure`, `SameSite=Strict`
- Tokens de réinitialisation avec expiration (1 heure)

&nbsp;

## 👥 Contributeurs

- **Lenny Viator** — Développeur

&nbsp;

---

<p align="center">
  <sub>Dernière mise à jour : 2025 · Version : 1.0 · PHP 8</sub>
</p>
- Requêtes préparées (PDO) contre les injections SQL
- Variables d'environnement (`.env`) pour les secrets
- Cookies de session sécurisés (`httponly`, `secure`, `samesite`)
- Régénération de session après connexion

## Auteur

**Lenny Viator** — BTS SIO — 1ère année