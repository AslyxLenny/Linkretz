# Linkretz

Application web de l'agence de voyages **Linkretz**, située à Chantilly. Elle permet la gestion des employés, des tour-opérateurs, des promotions et des demandes d'information clients.

## Fonctionnalités

- **Vitrine publique** : présentation de l'agence, horaires d'ouverture, liste des commerciaux, tour-opérateurs partenaires
- **Demande d'information** : formulaire de contact pour les clients
- **Espace administration** : gestion des employés, tour-opérateurs et promotions (CRUD)
- **Espace employé** : consultation des employés et des demandes d'information
- **Authentification** : connexion par identifiant/mot de passe, réinitialisation par e-mail
- **Traduction** : support français / anglais côté client

## Prérequis

- PHP 8.0+
- MySQL / MariaDB
- Composer
- Serveur web (Apache / Nginx)

## Installation

1. **Cloner le dépôt**

```bash
git clone https://github.com/aslyxlenny/linkretz.git
cd linkretz
```

2. **Installer les dépendances**

```bash
cd include
composer install
```

3. **Configurer l'environnement**

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

4. **Importer la base de données**

Importer le fichier SQL fourni dans votre SGBD MySQL.

## Structure du projet

```
├── index.php                  # Page d'accueil
├── .env.example               # Modèle de configuration
├── css/                       # Feuilles de style
├── js/                        # Scripts (validation, traduction)
├── include/                   # Composants PHP partagés
│   ├── connexion_bd.php       # Connexion à la base de données
│   ├── sec_admin.php          # Contrôle d'accès administrateur
│   ├── sec_employ.php         # Contrôle d'accès employé
│   ├── deconnexion.php        # Déconnexion
│   └── vendor/                # Dépendances Composer
└── page/
    ├── connexion.php          # Page de connexion
    ├── demande_info_client.php
    └── administration/
        ├── admin/             # Pages administrateur (CRUD)
        ├── employe/           # Pages employé (consultation)
        └── password/          # Réinitialisation du mot de passe
```

## Technologies

- **PHP** — Back-end et logique métier
- **MySQL** — Base de données relationnelle
- **HTML / CSS** — Interface utilisateur
- **JavaScript** — Validation côté client et traduction
- **PHPMailer** — Envoi d'e-mails (SMTP)
- **phpdotenv** — Gestion des variables d'environnement

## Sécurité

- Mots de passe hashés avec `password_hash()` (Bcrypt)
- Protection XSS : `htmlspecialchars()` sur toutes les sorties HTML
- Requêtes préparées (PDO) contre les injections SQL
- Variables d'environnement (`.env`) pour les secrets
- Cookies de session sécurisés (`httponly`, `secure`, `samesite`)
- Régénération de session après connexion

## Auteur

**Lenny Viator** — BTS SIO — 1ère année
