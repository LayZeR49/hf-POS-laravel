# hf-bioaquatics
 
Download and install composer
Install laravel(run in composer "composer global require laravel/installer")

Get source code from github(or anywhere e.g. zip file)

create database named "hfdatabase" in phpmyadmin

(if php artisan migrate doesnt work)
*change dbname in files\.env to "hfdatabase"
    or
*remove '.example. from \.env.example

run in vs code terminal: (with 'files' folder as root)
> composer install
> php artisan key:generate
> php artisan migrate
> php artisan serve

email = admin@admin.com
pass  = admin

registration is enabled