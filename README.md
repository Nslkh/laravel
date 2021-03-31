## How to Compile Assets
- Go to webpack.mix.js  change css to scss
- Go resources folder. Create scss folder - app.scss
- npm install, npm run dev

## Laravel frontend preset 
- https://github.com/laravel-frontend-presets

# Laravel 7.0+ Frontend preset for Tailwind CSS

A Laravel front-end scaffolding preset for [Tailwind CSS](https://tailwindcss.com) - a Utility-First CSS Framework for Rapid UI Development.

## Usage

1. Fresh install Laravel >= 7.0 and `cd` to your app.
2. Install this preset via `composer require laravel-frontend-presets/tailwindcss --dev`. Laravel will automatically discover this package. No need to register the service provider.

### a. For Presets without Authentication

1. Use `php artisan ui tailwindcss` for the basic Tailwind CSS preset
2. `npm install && npm run dev`
3. `php artisan serve` (or equivalent) to run server and test preset.

## ISSUE
- 'mix' is not recognized as an internal or external command,
operable program or batch file.

## Answer
- $ npm install laravel-mix@latest --save-dev

## Databases & Migrations

- Go to .env , customize it 
- Create db

## Controller
- php artisan make:controller PostsController -m
- Go to PostsController , create function index, return view,
- Go to resources , view, create folder posts - index.blade.php
- create route  

## Model
- php artisan make:model Post,
- php artisan make:migration create_posts_table
- Delete Post Model Created before and run the command == php artisan make:model Post -m
- Go to DB, create tables and migrate it 

## Artisan DB related Commands 
- php artisan migrate:install  -- keep tracks of which migration u have or have not run.   Prettey the same as php artisan migrate
- php artisan migrate:reset  -- which call the down method 
- php artisan migrate:refresh  -- this will rollback  the same as reset
- We Dont use a lot  
- php artisan migrate:fresh  -- drop the table  and run every available migration the same as REFRESH but won't use DOWN migration it will just delete the tables then run up migration again
- php artisan migrate:rollback  -- which roll it back 
- php artisan migrate:status  -- show table listing of every migration weather or not has been run yet this environment 

## Models Factories
- php artisan make:factory PostFactory
- php artisan tinker
- \App\Models\Posts::factory()->create();

