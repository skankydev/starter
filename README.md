# SkankyDev Starter

Le point de départ d'un projet [SkankyDev](https://github.com/skankydev/framework) : on clone, on install, on code.

## Installation

```bash
composer create-project skankydev/starter mon-projet
cd mon-projet
npm install
npm run build
```

`composer create-project` copie `.env.dist` en `.env` pour toi : ouvre-le et règle ta base MongoDB.

## Ce qu'il y a dedans

- une page d'accueil (`HomeController::index` + `src_front/view/home/index.php`), à remplacer par la tienne ;
- un layout, une 404, quelques parts (`header`, `footer`, `flash`, `table`, `paginator`) ;
- un front neutre en SCSS, compilé par Vite (`npm run dev` pour surveiller, `npm run build` pour la prod) ;
- `php craft`, la ligne de commande du framework (`php craft crud-maker` pour générer un CRUD complet).

## La doc

Elle est dans le dépôt du framework : [`docs/`](https://github.com/skankydev/framework/tree/master/docs). Le chapitre [02 Installation](https://github.com/skankydev/framework/blob/master/docs/002-Installation.md) explique comment générer ton premier CRUD.

## Développer le framework en même temps

Pour travailler sur le starter avec ton clone local de `skankydev/framework` (dans `../SkankyDev`), crée un fichier `composer.local.json` (ignoré par git) qui ajoute un dépôt de type `path`, puis :

```bash
COMPOSER=composer.local.json composer install
```

Composer fait alors un lien vers ton clone : tes modifs du framework sont visibles tout de suite.
