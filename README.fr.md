# SkankyDev Starter

![PHP](https://img.shields.io/badge/PHP-8.4%2B-blue.svg)
![MongoDB](https://img.shields.io/badge/MongoDB-5.0%2B-brightgreen.svg)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
[![Packagist](https://img.shields.io/packagist/v/skankydev/starter.svg)](https://packagist.org/packages/skankydev/starter)
[![Why PHP](https://img.shields.io/badge/Why_PHP-in_2026-7A86E8?style=flat&labelColor=18181b)](https://whyphp.dev)

[English](README.md) · **Français**

Le point de départ d'un projet [SkankyDev](https://github.com/skankydev/framework) : on clone, on install, on code.

## Installation

```bash
composer create-project skankydev/starter mon-projet
cd mon-projet
npm install
npm run build
```

`composer create-project` copie `.env.dist` en `.env` pour toi : ouvre-le et règle ta base MongoDB.

Pour essayer tout de suite, lance le serveur intégré de PHP depuis la racine du projet, puis ouvre `http://localhost:8000` :

```bash
php -S localhost:8000 -t public
```

## Ce qu'il y a dedans

- une page d'accueil (`HomeController::index` + `src_front/view/home/index.php`), à remplacer par la tienne ;
- un layout, une 404, quelques parts (`header`, `footer`, `flash`, `table`, `paginator`) ;
- les traductions dans `src_front/lang/`, en anglais et en français (la langue est choisie d'après le navigateur, dans `config/bootstrap.php`) ;
- un front neutre en SCSS, compilé par Vite (`npm run dev` pour surveiller, `npm run build` pour la prod) ;
- `php craft`, la ligne de commande du framework (`php craft crud-maker Article` pour générer un CRUD complet).

## La doc

Elle est dans le dépôt du framework : [`docs/fr/`](https://github.com/skankydev/framework/tree/master/docs/fr). Le chapitre [02 Installation](https://github.com/skankydev/framework/blob/master/docs/fr/002-Installation.md) explique comment générer ton premier CRUD.

