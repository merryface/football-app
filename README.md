# Fut Teem Laravel Set up

## 1. Clone the Repo
Clone this repo onto your machine locally.
```
git clone git@github.com:merryface/football-app.git
```
<br>

## 2. cd into the project
```
git clone git@github.com:merryface/football-app.git
```
<br>

## 3. Install Composer Dependencies
This will check the composer.json file, which list all the composer packages that the repo requires, and then installs them into your machine locally.
```
composer install
```
<br>

## 4. Install NPM Dependencies
This will check the packages.json file, which list all the npm packages that the repo requires, and then installs them into your machine locally.
```
npm install
```
<br>

## 5. Create a copy of the .env file
.env will not be in the repo for security reasons. You need to make a copy of the example one and rename it accordingly. It will fill out the relevant data as you continue through this guide.
```
cp .env.example .env
```
<br>

## 6. Generate an app encryption key
Laravel requires an encryption key, which is normally located in the .env. You can generate it using the following command. This must be done AFTER all the previous steps.
```
php artisan key:generate
```
<br>

## 7. Run Migrate to create database
All the migration files should already be in the repo, found in `backend/database/migrations`, however, you'll need to run artisan migrate in order to build it. There is no need to seed the database as there is no already existing data to add.
```
php artisan migrate
```
<br>