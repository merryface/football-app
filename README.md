# Table of contents

- [Table of contents](#table-of-contents)
- [Teemz Laravel Set up](#teemz-laravel-set-up)
  - [1. Clone the Repo](#1-clone-the-repo)
  - [2. cd into the project](#2-cd-into-the-project)
  - [3. Install Composer Dependencies](#3-install-composer-dependencies)
  - [4. Install NPM Dependencies](#4-install-npm-dependencies)
  - [5. Create a copy of the .env file](#5-create-a-copy-of-the-env-file)
  - [6. Generate an app encryption key](#6-generate-an-app-encryption-key)
  - [7. Run Migrate to create database](#7-run-migrate-to-create-database)
- [Database Structure](#database-structure)
  - [API Requests: Players](#api-requests-players)
    - [GET](#get)
    - [POST](#post)
    - [PATCH](#patch)
    - [DELETE](#delete)
  - [API Requests: Players](#api-requests-players-1)
    - [GET](#get-1)
    - [POST](#post-1)
    - [PATCH](#patch-1)
    - [DELETE](#delete-1)
- [RESTful API Usage Guide](#restful-api-usage-guide)
- [Players](#players)
  - [GET all Players](#get-all-players)
  - [POST a Player](#post-a-player)
  - [PATCH a Player](#patch-a-player)
  - [DELETE a player](#delete-a-player)
- [Matches](#matches)
  - [GET all Matches](#get-all-matches)
  - [POST a Match](#post-a-match)
  - [PATCH a Match](#patch-a-match)
  - [DELETE a Match](#delete-a-match)
- [Laravel](#laravel)
  - [About Laravel](#about-laravel)
  - [Learning Laravel](#learning-laravel)
  - [Laravel Sponsors](#laravel-sponsors)
    - [Premium Partners](#premium-partners)
  - [Contributing](#contributing)
  - [Code of Conduct](#code-of-conduct)
  - [Security Vulnerabilities](#security-vulnerabilities)
  - [License](#license)


# Teemz Laravel Set up

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

# Database Structure
The database has a simple structure of two unconnected tables. The players table has objects that contain information about each player. The Games table contains information about all saved matches.
## API Requests: Players

### GET
GET request exists to get all players, but not individual players. 
### POST
POST request exists to create a new player

### PATCH
PATCH request exists to update a player

### DELETE
DELETE request exists to delete a player

<br>

## API Requests: Players

### GET
GET request exists to get all matches and individual matches. 
### POST
POST request exists to create a new match

### PATCH
PATCH request exists to update a match

### DELETE
DELETE request exists to delete a match

<br>

# RESTful API Usage Guide
This guide will show what the requests look like and what information you should receive or pass into the Database.

<br>

# Players
## GET all Players
To GET all the players available use:
`https://peaceful-sea-21894.herokuapp.com/api/players`

This should return for each player:
- id
- name 
- wins
- losses
<br><br>

## POST a Player
To POST a player use:
`https://peaceful-sea-21894.herokuapp.com/api/players`

You need to pass:
- name (string)
  
<br>

You may also pass, but will be set to null if you don't:
- wins (integer)
- losses (integer)
<br><br>

## PATCH a Player
To PATCH a player use:
`https://peaceful-sea-21894.herokuapp.com/api/{playerID}`

You need to pass:
- name
  
<br>

You may also pass:
- wins (integer)
- losses (integer)
<br><br>

## DELETE a player
To DELETE a player use:
`https://peaceful-sea-21894.herokuapp.com/api/{playerID}`

You will receive a 204 when successfully deleted.
<br><br><br>

# Matches
## GET all Matches
To GET all the matches available use:
`https://peaceful-sea-21894.herokuapp.com/api/games`

This should return for each match:
- id
- team_one 
- team_one_score
- team_one_bib (unused at this time)
- team_two 
- team_two_score
- team_two_bib (unused at this time)
<br><br>

## POST a Match
To POST a match use:
`https://peaceful-sea-21894.herokuapp.com/api/games`

You need to pass:
- team_one (string)
- team_one_score (integer)
- team_two (string)
- team_two_score (string)
<br><br>

## PATCH a Match
To PATCH a match use:
`https://peaceful-sea-21894.herokuapp.com/api/{gameID}`

You need to pass:
- team_one (string)
- team_one_score (integer)
- team_two (string)
- team_two_score (string)
<br><br>

## DELETE a Match
To DELETE a match use:
`https://peaceful-sea-21894.herokuapp.com/api/{gameID}`

You will receive a 204 when successfully deleted.
<br><br><br>

# Laravel
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
