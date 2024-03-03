# LARAVEL PROJECT TEMPLATE

This is a tamplate for my laravel project

## Tech Stack

- [Laravel](https://laravel.com/docs/10.x)
- [TailwindCSS](https://tailwindcss.com/docs/installation)
- [Flowbite](https://flowbite.com/docs/)
- [Livewire](https://livewire.laravel.com/docs/installation)

## Installation

Install dependencies

```bash
composer install
pnpm install
```

Copy .env.example file

```bash
cp .env.example .env
```

Generate aplication key

```bash
php artisan key:generate
```

Run the project

```bash
php artisan serve
pnpm dev
```

## Documentation

[Read this before you start coding](https://github.com/ddim03/workflow-git-and-github)

If you want to make new view, use this structure example

```bash
views/
├── layouts/
│   ├── auth.blade.php
│   └── guest.blade.php
├── components/
│   ├── navbar.blade.php
│   ├── sidebar.blade.php
│   ├── card.blade.php
│   └── dll
├── login/
│   └── index.blade.php
├── dashboard/
│   └── index.blade.php
└── user/
    ├── index.blade.php
    ├── create.blade.php
    ├── show.blade.php
    └── edit.blade.php
```
