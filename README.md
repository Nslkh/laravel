## Databases & Migrations

Go to .env , customize it 
Create db

## Controller
php artisan make:controller PostsController -m
Go to PostsController , create function index, return view,
Go to resources , view, create folder posts - index.blade.php
create route  

## Model
php artisan make:model Post,
php artisan make:migration create_posts_table
Delete Post Model Created before and run the command == php artisan make:model Post -m
Go to DB, create tables and migrate it 

## Artisan DB related Commands 
php artisan migrate:install  -- keep tracks of which migration u have or have not run.   Prettey the same as php artisan migrate
php artisan migrate:reset  -- which call the down method 
php artisan migrate:refresh  -- this will rollback  the same as reset
We Dont use a lot  
php artisan migrate:fresh  -- drop the table  and run every available migration the same as REFRESH but won't use DOWN migration it will just delete the tables then run up migration again
php artisan migrate:rollback  -- which roll it back 
php artisan migrate:status  -- show table listing of every migration weather or not has been run yet this environment 
