# SkankyDev Starter

![PHP](https://img.shields.io/badge/PHP-8.4%2B-blue.svg)
![MongoDB](https://img.shields.io/badge/MongoDB-5.0%2B-brightgreen.svg)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
[![Packagist](https://img.shields.io/packagist/v/skankydev/starter.svg)](https://packagist.org/packages/skankydev/starter)
[![Why PHP](https://img.shields.io/badge/Why_PHP-in_2026-7A86E8?style=flat&labelColor=18181b)](https://whyphp.dev)

**English** · [Français](README.fr.md)

The starting point of a [SkankyDev](https://github.com/skankydev/framework) project: clone, install, code.

## Installation

```bash
composer create-project skankydev/starter my-project
cd my-project
npm install
npm run build
```

`composer create-project` copies `.env.dist` to `.env` for you: open it and set up your MongoDB database.

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

