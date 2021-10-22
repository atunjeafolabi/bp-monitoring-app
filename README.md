Blood Pressure Records App
--------------------------------
## Overview
This solution implements a Laravel application which is to be used by nurses to input their patients’ blood pressure readings via a web interface. 

## Installation:
- Clone the project: ```git clone https://github.com/atunjeafolabi/bp-monitoring-app.git```
- Create a mysql database named ```circle_link_health_bp_monitoring```
- From the project root directory, run `composer install`
- Run migrations ```php artisan migrate```
- Run `php artisan db:seed` to populate the database with 50,000 `Patients` records.
- Run local dev server: ```php artisan serve``` 
- Run ``npm install`` and ```npm run dev``` for frontend dependencies

## Features
- A page for creating patients (completed)
- A page to record blood pressure readings for patients (completed)
- Export a CSV of all patients (started, but incomplete)

## Usage:
Visit ``http://localhost:8000/``

Running Tests
-------------
- Ensure that `database.sqlite` file is present in the database folder of the root project
- Run `php artisan test`

Future Work
-----------
- Solve error for CSV Export for large datasets
    - Error: `Allowed memory size of 134217728 bytes exhausted (tried to allocate 4096 bytes)`
- Improvements to the user interface
- Increase test coverage
- Further refactoring

Tech Stack
----------
- Laravel 8
- Livewire
- Livewire Datatables
- MySQL

