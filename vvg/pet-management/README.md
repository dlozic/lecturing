# PetManagement

## About the project
This is a demo-example of a PetManagement project built with Laravel.

## Development
Preparing the project for development:
```bash
# cloning the project
git clone ...
cd pet-management

# change .env file with your db data
cp .env.example .env

# installing 3rd party dependencies to /vendor
composer install

# setting secret key to .env
php artisan key:generate

# running database migrations
php artisan migrate:fresh
```