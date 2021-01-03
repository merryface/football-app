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
To GET all the gifts available use:
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