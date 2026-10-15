# SkankyDev Starter

![PHP](https://img.shields.io/badge/PHP-8.4%2B-blue.svg)
![MongoDB](https://img.shields.io/badge/MongoDB-5.0%2B-brightgreen.svg)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
[![Packagist](https://img.shields.io/packagist/v/skankydev/starter.svg)](https://packagist.org/packages/skankydev/starter)
[![Why PHP](https://img.shields.io/badge/Why_PHP-in_2026-7A86E8?style=flat&labelColor=18181b)](https://whyphp.dev)

**English** · [Français](README.fr.md)

The starting point of a [SkankyDev](https://github.com/skankydev/framework) project: clone, install, code.

## What you need

- PHP 8.4 or later, with the `mongodb` (2.4.1 or later) and `intl` extensions;
- Composer;
- a running MongoDB;
- *bonus*: Node.js and npm, only to work on the CSS and JS.

**Before running anything**, go through the [02 Installation](https://github.com/skankydev/framework/blob/master/docs/en/002-Installation.md#what-you-need) chapter: you'll find the links, the usual traps (especially the `mongodb` extension) and the commands to check that everything is ready. If a command fails further down, it's almost always a missing requirement.

## Installation

```bash
composer create-project skankydev/starter my-project
cd my-project
```

`composer create-project` copies `.env.dist` to `.env` for you: open it and set up your MongoDB database.

The CSS and JS ship already compiled. If you have Node.js and want to work on the front end:

```bash
npm install
npm run dev
```

To try it right away, start PHP's built-in server from the project root, then open `http://localhost:8000`:

```bash
php -S localhost:8000 -t public
```

## What's inside

- a home page (`HomeController::index` + `src_front/view/home/index.php`), to replace with your own;
- a layout, a 404, a few parts (`header`, `footer`, `flash`, `table`, `paginator`);
- the translations in `src_front/lang/`, in English and French (the language is picked from the browser, in `config/bootstrap.php`);
- a neutral SCSS front end, compiled by Vite (`npm run dev` to watch, `npm run build` for production);
- `php craft`, the framework's command line (`php craft crud-maker Article` to generate a complete CRUD).

## The docs

They're in the framework's repository: [`docs/en/`](https://github.com/skankydev/framework/tree/master/docs/en). The [02 Installation](https://github.com/skankydev/framework/blob/master/docs/en/002-Installation.md) chapter explains how to generate your first CRUD.

