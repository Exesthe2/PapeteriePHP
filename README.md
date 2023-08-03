# Docker pour développer avec Symfony

## Services disponibles

- Apache PHP  8.2.3
- MariaDB
- PHPMyAdmin
- MailHog

## Utilisation

Des scripts sont proposés pour faciliter la gestion des containers

Action | Unix      | Windows
-- |-----------| --
Lancement | bin/start | bin/start.ps1
Accès au shell du container | bin/shell | bin/shell.ps1


## Configuration

Lors du build, le container **web** va recopier le fichier *DockerContainersConfig/config/php.ini* pour configurer le serveur PHP.

## Log

Le dossier **log** contient une liaison avec le dossier **/var/log** du container ***web**.

***
## Installation de Symfony

### Présentation de l'arborescence

## Premier Contrôleur

## Première Vue




# Apparence

On utilisera Bootstrap, et plus précisément Darkly
**https://bootswatch.com/darkly/**

### Webpack encore

#### Installation

```bash
composer require symfony/webpack-encore-bundle
yarn install
yarn build
```

#### Ajout des dépendances graphiques


##### Font awesome

```bash
yarn add --dev @fortawesome/fontawesome-free
```

Dans le fichier **assets/styles/app.css**

```css
/* Ajout de Font Awesome */
@import '~@fortawesome/fontawesome-free/css/all.css';
```

Choix des polices:
https://fontawesome.com/v5/search?&m=free



## Datas

### Import mapping d'une BD existante

```bash
bin/console doctrine:mapping:import --path="src/Entity" App\Entity
```