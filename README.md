# CRUD ADMIN

CRUD ADMIN

## Create Project
 >  /usr/local/bin/composer install
 > composer create-project --prefer-dist laravel/laravel:^7.0 logistiktni

## Installation
 > composer install 

 > cp .env.example .env

 > php artisan key:generate

 > php artisan serve

# Common Command
 > php artisan make:model Profile --migration

 > php artisan migrate:fresh

 > php artisan migrate:fresh --seed

 > php artisan make:seeder DictionarySeeder

# Adding Auth
 > composer require laravel/ui:^2.4

 > php artisan ui vue --auth

# Adding Token Auth 
 > composer require laravel/sanctum
 
 > php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

 > php artisan migrate

# Adding MasterPass
 > composer require imanghafoori/laravel-masterpass
 
 > php artisan vendor:publish --tag=master_password

 tambah di .env
 > MASTER_PASSWORD=passwordsakti

# Framework UI
 > https://demo.getstisla.com/
 
 > https://www.w3schools.com/icons/fontawesome5_intro.asp
 
# Deployment to Hosting
 > https://www.domainesia.com/panduan/cara-upload-file-laravel-di-hosting/

# Mysql Command

# # Create DB
 > mysql -u root1 -p

 > CREATE DATABASE kapal_laut;

## Dumping File MYSQL
 > mysqldump -u root1 -p pilold > dbexport.sql

# Rest API Token Tutorial
 > https://jurnalmms.web.id/laravel/membuat-authentikasi-api-dengan-laravel-passport/

 > https://jurnalmms.web.id/laravel/membuat-rest-api-dengan-laravel-7/#Melindungi_REST_API_dengan_Authentikasi
 
 > https://laravel.com/docs/7.x/passport#introduction 

 > https://laravel.com/docs/7.x/sanctum#how-it-works
